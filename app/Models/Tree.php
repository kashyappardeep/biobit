<?php

namespace App\Models;

use App\Models\User;

class Tree
{
    /**
     * Generate the tree structure for Treant.js starting from the given sponsor ID.
     */
    public static function getTreeForTreant($sponsorId)
    {
        $root = User::find($sponsorId);

        if (!$root) {
            throw new \Exception("Sponsor with ID {$sponsorId} not found.");
        }

        return self::buildNode($root);
    }

    /**
     * Build a node with its children recursively.
     */
    private static function buildNode($user)
    {
        // Base node structure
        $class = $user->activation == 1 ? 'active-user' : 'inactive-user';
        $node = [
            'text' => [
                'name' => $user->name,  // User name
                'id' => $user->id,      // User ID
            ],
            'HTMLclass' => $class  // Add the custom class for styling
        ];

        // Load children
        $children = User::where('under_user_id', $user->id)
            ->orderBy('team_position')
            ->get();

        if ($children->isNotEmpty()) {
            $node['children'] = [];

            foreach ($children as $child) {
                $node['children'][] = self::buildNode($child);
            }
        }

        return $node;
    }
}
