</div>

        <!-- script to bring various tools for editing-->
        <script>
             CKEDITOR.replace( 'editor1' );
        </script>
        <!--end of scrip-->

        <!--script for pop up date picker in add date-->
        <script>
            $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
            })
        </script>
        <!--end of scrip-->
    </body> <!--end of body-->
</html> <!--end of html/page-->

