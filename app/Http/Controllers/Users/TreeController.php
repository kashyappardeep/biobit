<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tree;
use App\Models\User;

class TreeController extends Controller
{
    public function showTree($sponsorId)
    {
        try {
            // Fetch tree data from the Tree model
            $treeData = Tree::getTreeForTreant($sponsorId);

            // Prepare the full tree structure
            $treeStructure = [
                'chart' => ['container' => '#tree-container'],
                'nodeStructure' => $treeData,
            ];
            // dd($treeStructure);

            // Pass data to the Blade view
            return view('users.tree', ['treeStructure' => json_encode($treeStructure)]);
        } catch (\Exception $e) {
            return view('tree', ['error' => $e->getMessage()]);
        }
    }

    public function distributeBinaryIncome()
    {
        try {
            // Fetch all users to process their binary income
            $users = User::all();

            foreach ($users as $user) {
                // Calculate the team business for left and right legs
                $teamBusiness = $this->getTeamMemberCounts($user->id);

                // Get the last processed business
                $processed = $user->binary_processed ?? 0;
                // dd($teamBusiness);
                if ($teamBusiness instanceof \Illuminate\Http\JsonResponse) {
                    $teamBusiness = $teamBusiness->getData(true); // Converts JSON to an associative array
                }

                // Calculate new business since last processed
                $left_team_count = $teamBusiness['left_team_count'];
                $right_team_count = $teamBusiness['right_team_count'];
                $minValue = min($left_team_count, $right_team_count);
                $amount = $minValue * 30;

                $matchingBusiness = $amount - $processed;


                if ($matchingBusiness > 0) {
                    // Calculate 10% of matching business
                    $binaryIncome = $matchingBusiness * 0.10;
                    // dd($binaryIncome);
                    // Update user's total binary income
                    $user->activation_balance += $binaryIncome;

                    // Update processed business
                    $user->binary_processed += $matchingBusiness;

                    // Save the updates
                    $user->save();

                    // Log the transaction in earnings or transaction table
                    $user->transactions()->create([
                        'user_id' => $user->id,
                        'amount' => $binaryIncome,
                        'type' => 8,
                    ]);
                }
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Binary income distribution completed.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function getTeamMemberCounts($userId)
    {

        $user = User::findOrFail($userId);

        $teamCounts = $user->countTeamMembers();

        return response()->json([
            'user_id' => $userId,
            'left_team_count' => $teamCounts['left'],
            'right_team_count' => $teamCounts['right'],
        ]);
    }
}
