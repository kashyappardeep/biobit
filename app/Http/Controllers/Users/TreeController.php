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
}
