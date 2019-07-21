<div class="container">
    <div class="float-left">
    Página {{$clientes->currentPage()}} / {{$clientes->lastPage}}
    </div>
    <div class="float-right">
        {{$clientes->render()}}
    </div>
</div>