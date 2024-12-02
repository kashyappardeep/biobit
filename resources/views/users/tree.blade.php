@include('layouts.header')

<style>
    #tree-container {
        width: 100%;
        height: 100vh;
    }

    /* Style for active users (green) */
    .active-user{
        color: #31ec63  !important;  /* Ensures the color is applied */
    }

    /* Style for inactive users (red) */
    .inactive-user{
        color: #ff1f1f !important;  /* Ensures the color is applied */
    }
</style>

<div id="tree-container"></div>

@if(isset($error))
    <div style="color: red; text-align: center; margin-top: 20px;">
        <strong>Error:</strong> {{ $error }}
    </div>
@else
    <script>
        // Initialize Treant.js with the passed PHP tree structure
        const treeStructure = {!! $treeStructure !!};
        console.log('treeStructure', treeStructure);
        new Treant(treeStructure);
    </script>
@endif

@include('layouts.footer')
