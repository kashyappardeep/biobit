@include('layouts.header')
<style>
    #tree-container {
        width: 100%;
        height: 100vh;
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
            new Treant(treeStructure);
        </script>
    @endif


@include('layouts.footer')