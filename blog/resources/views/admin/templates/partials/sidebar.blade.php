<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                       <a href="#"><i class="fas fa-cubes"></i> ADPanel</a>
                </li>
                <hr style="background-color: #BEBEBE">
                <li>
                    <a href="{{route('user.index')}}">Usuarios</a>
                </li>
                <li>
                    <a href="{{route('category.index')}}">Categorias</a>
                </li>
                <li>
                    <a href="{{route('tag.index')}}">Tags</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="{{ route('admin.auth.logout')}}" class="btn btn-danger btn-block mt-3">salir</a>
                </li>
            </ul>
        </div>
        
<!-- /#sidebar-wrapper -->