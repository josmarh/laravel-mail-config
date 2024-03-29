<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900  py-4 sm:pt-0">
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8antialiased">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('status') }}
                    </div>
                @endif
                <h1>App Configuration</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                
                @if(isset($config->id))
                <form action="{{route('email-config.update', $config->id)}}" method="POST" id="config-form2">
                @method('put')
                @else
                <form action="{{ route('email-config.store') }}" method="POST" id="config-form">
                @endif
                @csrf
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <center><div class="ml-4 text-lg leading-7 font-semibold">Application</div></center>
                        <input type="hidden" name="id" value="{{old('id', $config->id ?? null)}}" id="mail-id"/>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6">
                            <input type="text" placeholder="App Name" class="mailer" name="app_name" value="{{old('app_name', $config->app_name ?? null)}}" required /> 
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <input type="text" placeholder="App URL" class="mailer" name="app_url" value="{{ old('app_url', $config->app_url ?? null) }}" required /> 
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <center><div class="ml-4 text-lg leading-7 font-semibold">Mail Server</div></center>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <input type="email" placeholder="From Address" class="mailer" name="mail_from_address" value="{{ old('mail_from_address', $config->mail_from_address ?? null) }}" required />
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <input type="text" placeholder="Sending Method (e.g: SMTP)" class="mailer" maxlength="10" name="mail_mailer" value="{{ old('mail_mailer', $config->mail_mailer ?? null) }}" required>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <input type="text" placeholder="SMTP Host" class="mailer" name="mail_host" value="{{ old('mail_host', $config->mail_host ?? null) }}" required>
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <input type="number" placeholder="SMTP Port" class="mailer" name="mail_port" value="{{ old('mail_port', $config->mail_port ?? null) }}" required>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <input type="email" placeholder="SMTP User" class="mailer" name="mail_username" value="{{ old('mail_username', $config->mail_username ?? null) }}" required>
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <input type="password" placeholder="SMTP Password" class="mailer" name="mail_password" value="{{ old('mail_password', $config->mail_password ?? null) }}" required>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                Connection Type <br>
                                
                                <input type="radio" class="mail-encrypt mailer" value="ssl" name="mail_encryption" {{ old('mail_encryption', $config->mail_encryption ?? null) == 'ssl' ? 'checked' : '' }}>
                                <label for="mail_encryption">SSL</label>

                                <input type="radio"  class="mail-encrypt mailer" value="tls" name="mail_encryption" {{ old('mail_encryption', $config->mail_encryption ?? null) == 'tls' ? 'checked' : '' }}>
                                <label  for="mail_encryption">TLS</label>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <label class="custom-control-label" for="checkbox">Send Test Mail</label>
                                <input type="checkbox" name="test_mail_check" id="mail-check" >
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <input type="email" placeholder="Test Mail Address" name="test_email" id="test-mail" disabled />
                            </div>
                            
                        </div>
                        <input type="hidden" id="checkchange" name="change" placeholder="change checker">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l" id="btn">
                            <button type="submit" id="save">Save</button>
                        </div>
                    </div>
                </form>

                
            </div>
        </div>

        <script>
        $(function(){
            $('#mail-check').click(function(){
                if ($(this).prop('checked') == true){
                    $('#test-mail').prop('disabled',false);
                }else{
                    $('#test-mail').prop('disabled',true);
                }
            });

            if($('#mail-id').val() != ''){
                $('#btn').html('<button type="button" id="edit">Edit</button>');               
                $('#mail-check').prop('disabled',true);
                // $('.mail-encrypt').prop('disabled',true);
                $('.mailer').prop('disabled',true);
            }
            
            $('#edit').click(function(){
                $('#mail-check').prop('disabled',false);
                // $('.mail-encrypt').prop('disabled',false);
                $('.mailer').prop('disabled',false);
                $('#btn').html('<button type="submit" id="save">Save</button>');
            });

            $('.mailer').change(function(){
                $('#checkchange').val('1');
                console.log($('#checkchange').val());
            });
        });
        </script>
    </body>
</html>
