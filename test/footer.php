    </div>
   </div>

   <script>
        $(document).ready(function (){
            $('.main-nav-list .button-table a.button-table-drop').click(function () {
                $(this).parent('li').children('.sub-nav-list-table').slideToggle();
                $('.drop-menu-icon').toggleClass('fa-chevron-right fa-chevron-down');
            });
        });
   </script>
</body>
</html>

