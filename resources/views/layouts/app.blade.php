<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('tittle')</title>
</head>
<body>

    <header>
        <h1>Library System</h1>

        <nav>
            <a href="/books">Books</a> |
            <a href="/categories">Categories</a> |
            <a href="/members">Members</a>
            <form action="{{ route('logout') }}" method="POST">
            @csrf
                <button type="submit">Logout</button>
            </form>

        </nav>
        
        <hr>
    </header>

    <main>
        @if (session('success'))
            <p role="status" style="color: green;">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
    <footer>
        <br>
        <hr>
        <p>&copy; {{ date('Y') }} Sistem Informasi Perpustakaan. All rights reserved.</p>
    </footer>
</body>
</html>