<?php if (Session::get('loggedIn') == true):?>
        <?php else: ?>
            <form class="navbar-form pull-right" action="login/run" method="post">
              <input class="span2" type="text" placeholder="Username" id="login" name="login">
              <input class="span2" type="password" placeholder="Password"  id="password" name="password">
              <button type="submit" class="btn">Ingresar</button>
            </form>
           <?php endif; ?>
