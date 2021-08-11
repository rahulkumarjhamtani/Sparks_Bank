<div id="foot">
    <footer class="page-footer">
      <p class="copy footer-copyright text-center text-light">Created by : Rahul Kumar Jhamtani <br> &copy; 2021 Sparks Bank | All Rights Reserved</p>
    </footer>
  </div>

  <script>
      var burger=document.getElementsByClassName('navbar-burger')[0];
      burger.addEventListener('click', (e)=>{
          var navbar=document.getElementById(burger.dataset.target);
          navbar.classList.toggle('is-active');
          burger.classList.toggle('is-active');
      });
  </script>