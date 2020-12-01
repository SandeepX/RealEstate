<!--jquery validation-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>

    $(document).ready(function () {

        $('#form').validate({ // initialize the plugin
            rules: {
                title: {
                    required: true
                },
            },
            messages: {
                title: {
                    required: "Title is required.",
                },

            },
        });

    });
</script>
