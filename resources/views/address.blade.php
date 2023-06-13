<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery PH Locations</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
    <script type="text/javascript">

        var my_handlers = {

            fill_provinces:  function(){

                var region_code = $(this).val();
                $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);

            },

            fill_cities: function(){

                var province_code = $(this).val();
                $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
            },


            fill_barangays: function(){

                var city_code = $(this).val();
                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            }
        };

        $(function(){
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);

            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'});

            $('#region').ph_locations('fetch_list');
        });
    </script>
</head>
<body>
    <h1>jQuery PH Locations Demo</h1>
    <div>
        <table>
            <tr>
                <td>Region</td>
                <td><select id="region"></select></td>
            </tr>
            <tr>
                <td>Province</td>
                <td><select id="province"></select></td>
            </tr>
            <tr>
                <td>City</td>
                <td><select id="city"></select></td>
            </tr>
            <tr>
                <td>Barangay</td>
                <td><select id="barangay"></select></td>
            </tr>
        </table>
    </div>
</body>
</html>
