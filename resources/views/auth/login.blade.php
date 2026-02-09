@include('template.header')

<div class="container mt-5 p-5 text-center">
    <h1>Login</h1>
    <div class="card">
        <form method="post">
        @csrf
        <div class="mx-3 mt-3">
            <input class="form-control" name="email" placeholder="email"/>
        </div>
        <div class="m-3">
            <input class="form-control" name="password" placeholder="Password"/>
        </div>
        <button class="btn btn-primary my-2">Submit</button>
    </div>
</div>

@include('template.footer')