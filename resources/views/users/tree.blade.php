@include('layouts.header')

<style>
    #tree-container {
        width: 100%;
         min-height: 100vh; 
        padding: 20px; 
    }

    .active-user {
        color: #31ec63 !important; /* Green for active users */
        font-weight: bold;
    }

    .inactive-user {
        color: #ff1f1f !important; /* Red for inactive users */
        font-weight: bold;
    }

    .Treant {
        transform-origin: top left; /* Set scale origin */
        transition: transform 0.2s ease-in-out; /* Smooth zoom transitions */
    }

    @media (max-width: 768px) {
        .Treant {
            transform: scale(0.6); /* Scale down for smaller screens */
            margin-left: -150px;
        }
    }

    @media (max-width: 480px) {
        .Treant {
            transform: scale(0.6); 
            margin-left: -150px;
        }
    }
    @media (max-width: 380px) {
        .Treant {
            transform: scale(0.6); 
            margin-left: -150px;
        }
    }
    @media (max-width: 250px) {
        .Treant {
            transform: scale(0.6); 
            margin-left: -150px;
        }
    }
</style>

<div id="tree-container"></div>

@if(isset($error))
    <div style="color: red; text-align: center; margin-top: 20px;">
        <strong>Error:</strong> {{ $error }}
    </div>
@else
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                const treeStructure = {!! $treeStructure !!};
                console.log('Tree Structure:', treeStructure);

                // Initialize Treant.js
                new Treant(treeStructure);
            } catch (error) {
                console.error('Error initializing Treant.js:', error);
            }
        });
    </script>
@endif

@include('layouts.footer')
