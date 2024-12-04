@include('layouts.header')

<style>
    #tree-container {
        width: 100%;
        height: 100vh;
        overflow: auto;
    }

    .active-user {
        color: #31ec63 !important;
    }

    .inactive-user {
        color: #ff1f1f !important;
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
            const treeStructure = {!! $treeStructure !!};
            console.log('treeStructure:', treeStructure);

            // Initialize Treant.js
            new Treant(treeStructure);
        });
    </script>
@endif

@include('layouts.footer')
