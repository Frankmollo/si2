<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <div class="text">Bienvenido a Quality Store :)</div>
    {{ __('Dashboard') }}
</h2>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        </div>
    </div>
</div>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Nombre:</p>
                            <p><strong>{{ Auth::user()->name }}</strong></p>
                            <hr>
                            <p>Email:</p>
                            <p><strong>{{ Auth::user()->email }}</strong></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ Auth::user()->foto }}" alt="{{ Auth::user()->name }}"
                                class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

-->

<script>
    function redireccionar() {
        window.location.href = "{{ route('home') }}";
    }

    setTimeout("redireccionar()", 100);
</script>
