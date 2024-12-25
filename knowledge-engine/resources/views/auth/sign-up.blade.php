<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet"> -->
    @vite('resources/css/app.css')

    <title>Laravel Assignment | Login page</title>
</head>

<body id="auth-body" class="overflow-hidden relative w-screen h-screen" style="background-color:#ffffff">
    <div x-data="" data-auth="auth-login" class="relative w-full h-full">
        <!-- <img src="/storage/auth/background.jpg" id="auth-background-image" class="object-cover absolute z-10 w-screen h-screen"> -->
        <div id="auth-background-image-overlay" class="absolute inset-0 z-20 w-screen h-screen" style="background-color:#ffffff; opacity:1;"></div>


        <main id="auth-main-content" class="flex relative z-30 flex-col justify-center w-screen min-h-screen items-stretch sm:items-center sm:py-10">
            <div wire:snapshot="{&quot;data&quot;:{&quot;email&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;rememberMe&quot;:false,&quot;showPasswordField&quot;:false,&quot;showIdentifierInput&quot;:true,&quot;showSocialProviderInfo&quot;:false,&quot;language&quot;:[{&quot;login&quot;:[{&quot;page_title&quot;:&quot;Sign in&quot;,&quot;headline&quot;:&quot;Sign in&quot;,&quot;subheadline&quot;:&quot;Login to your account below&quot;,&quot;show_subheadline&quot;:false,&quot;email_address&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;remember_me&quot;:&quot;Remember me&quot;,&quot;edit&quot;:&quot;Edit&quot;,&quot;button&quot;:&quot;Continue&quot;,&quot;forget_password&quot;:&quot;Forget your password?&quot;,&quot;dont_have_an_account&quot;:&quot;Don't have an account?&quot;,&quot;sign_up&quot;:&quot;Sign up&quot;,&quot;social_auth_authenticated_message&quot;:&quot;You have been authenticated via __social_providers_list__. Please login to that network below.&quot;,&quot;change_email&quot;:&quot;Change Email&quot;,&quot;couldnt_find_your_account&quot;:&quot;Couldn\u2019t find your account&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;register&quot;:[{&quot;page_title&quot;:&quot;Sign up&quot;,&quot;headline&quot;:&quot;Sign up&quot;,&quot;subheadline&quot;:&quot;Register for your free account below.&quot;,&quot;show_subheadline&quot;:false,&quot;name&quot;:&quot;Name&quot;,&quot;email_address&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;password_confirmation&quot;:&quot;Confirm Password&quot;,&quot;already_have_an_account&quot;:&quot;Already have an account?&quot;,&quot;sign_in&quot;:&quot;Sign in&quot;,&quot;button&quot;:&quot;Continue&quot;,&quot;email_registration_disabled&quot;:&quot;Email registration is currently disabled. Please use social login.&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;verify&quot;:[{&quot;page_title&quot;:&quot;Verify Your Account&quot;,&quot;headline&quot;:&quot;Verify your email address&quot;,&quot;subheadline&quot;:&quot;Before you can proceed you must verify your email.&quot;,&quot;show_subheadline&quot;:false,&quot;description&quot;:&quot;Before proceeding, please check your email for a verification link. If you did not receive the email,&quot;,&quot;new_request_link&quot;:&quot;click here to request another&quot;,&quot;new_link_sent&quot;:&quot;A new link has been sent to your email address.&quot;,&quot;or&quot;:&quot;Or&quot;,&quot;logout&quot;:&quot;click here to logout&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordConfirm&quot;:[{&quot;page_title&quot;:&quot;Confirm Your Password&quot;,&quot;headline&quot;:&quot;Confirm Password&quot;,&quot;subheadline&quot;:&quot;Be sure to confirm your password below&quot;,&quot;show_subheadline&quot;:false,&quot;password&quot;:&quot;Password&quot;,&quot;button&quot;:&quot;Confirm password&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordResetRequest&quot;:[{&quot;page_title&quot;:&quot;Request a Password Reset&quot;,&quot;headline&quot;:&quot;Reset password&quot;,&quot;subheadline&quot;:&quot;Enter your email below to reset your password&quot;,&quot;show_subheadline&quot;:false,&quot;email&quot;:&quot;Email Address&quot;,&quot;button&quot;:&quot;Send password reset link&quot;,&quot;or&quot;:&quot;or&quot;,&quot;return_to_login&quot;:&quot;return to login&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordReset&quot;:[{&quot;page_title&quot;:&quot;Reset Your Password&quot;,&quot;headline&quot;:&quot;Reset Password&quot;,&quot;subheadline&quot;:&quot;Reset your password below&quot;,&quot;show_subheadline&quot;:false,&quot;email&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;password_confirm&quot;:&quot;Confirm Password&quot;,&quot;button&quot;:&quot;Reset Password&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;twoFactorChallenge&quot;:[{&quot;page_title&quot;:&quot;Two Factor Challenge&quot;,&quot;headline_auth&quot;:&quot;Authentication Code&quot;,&quot;subheadline_auth&quot;:&quot;Enter the authentication code provided by your authenticator application.&quot;,&quot;show_subheadline_auth&quot;:false,&quot;headline_recovery&quot;:&quot;Recovery Code&quot;,&quot;subheadline_recovery&quot;:&quot;Please confirm access to your account by entering one of your emergency recovery codes.&quot;,&quot;show_subheadline_recovery&quot;:false},{&quot;s&quot;:&quot;std&quot;}]},{&quot;s&quot;:&quot;std&quot;}],&quot;twoFactorEnabled&quot;:false,&quot;userSocialProviders&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;userModel&quot;:[null,{&quot;class&quot;:&quot;users&quot;,&quot;s&quot;:&quot;mdl&quot;}],&quot;appearance&quot;:[{&quot;logo&quot;:[{&quot;type&quot;:&quot;svg&quot;,&quot;image_src&quot;:&quot;&quot;,&quot;svg_string&quot;:&quot;<svg class=\&quot;w-full h-full\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot; viewBox=\&quot;0 0 27 27\&quot; fill=\&quot;none\&quot;><g fill=\&quot;currentColor\&quot;><path d=\&quot;M21.508 13.52c1.096 1.048 2.456.12 2.425-1.647a3.282 3.282 0 0 0-.632-1.878c-.382-.498-.866-.769-1.331-.742-1.568.089-1.874 2.92-.462 4.267ZM25.462 15.698c.18-.925 0-1.535-.06-1.736-.177-.52-.459-.646-.573-.676-1.098-.297-2.012 2.679-1.208 3.93.544.844 1.541.022 1.84-1.518ZM22.976 6.382c-.898.21-.015 3.05 1.152 3.708.747.419 1.1-.36.713-1.574a4.657 4.657 0 0 0-.832-1.525c-.38-.442-.767-.672-1.034-.609ZM18.174 9.37c1.307.922 2.769.17 2.557-1.317-.1-.6-.401-1.146-.854-1.552-.204-.173-.826-.7-1.591-.588-1.393.203-1.695 2.339-.112 3.456ZM20.714 13.793c-.16-.198-.496-.608-1.121-.708-1.756-.277-3.05 2.048-2.005 3.606 1.009 1.506 3.139.858 3.507-1.073a2.364 2.364 0 0 0-.381-1.825ZM26.459 12.157a6.3 6.3 0 0 0-.327-1.6c-.064-.16-.258-.651-.477-.624-.562.068-.254 3.43.357 3.906.334.261.541-.525.447-1.682ZM20.72 3.994c-.726-.528-1.108-.518-1.3-.416-.72.381.279 2.448 1.632 2.866.826.256 1.172-.347.712-1.238a3.804 3.804 0 0 0-1.044-1.212ZM22.734 19.18c.34-.8.18-1.31.12-1.5a.927.927 0 0 0-.433-.49c-1.146-.554-2.794 1.533-2.317 2.938.425 1.255 2.02.483 2.63-.947ZM17.116 9.842a2.18 2.18 0 0 0-1.457-.645c-1.87-.067-2.83 2.127-1.528 3.503 1.251 1.326 3.48.592 3.615-1.19.064-.898-.463-1.477-.63-1.668ZM24.513 6.842c.218.056-.007-.487-.483-1.161a8.951 8.951 0 0 0-.894-1.075c-.313-.315-.555-.495-.616-.457-.234.145 1.574 2.586 1.993 2.693ZM25.621 17.335c-.408-.169-1.695 2.434-1.514 3.06.1.344.695-.325 1.158-1.302.202-.404.347-.835.432-1.279.055-.366-.024-.457-.076-.479ZM14.446 5.54c1.05.8 2.522.286 2.38-.829-.071-.558-.51-.927-.652-1.048-.351-.285-.8-.422-1.25-.381-1.078.126-1.534 1.452-.478 2.258ZM17.01 19.179a1.529 1.529 0 0 0-.316-1.407 1.637 1.637 0 0 0-.89-.519c-1.601-.357-2.92 1.29-2.077 2.592.823 1.268 2.878.85 3.283-.666ZM21.475 3.803c.23 0 .095-.343-.478-.849a6.936 6.936 0 0 0-1.071-.762c-.408-.237-.721-.36-.777-.307-.137.127 1.732 1.923 2.326 1.918ZM23.087 20.72c-.5-.407-2.265 1.518-2.146 2.342.068.476 1.05-.159 1.684-.962.442-.556.514-.907.541-1.04.012-.073.026-.253-.079-.34ZM17.237 1.8c-.712-.382-1.002-.287-1.111-.191-.45.38.366 1.55 1.4 1.726.64.109.898-.277.542-.81-.256-.382-.69-.64-.83-.726ZM18.975 22.245c.325-.577.173-.932.107-1.083a.86.86 0 0 0-.223-.256c-.91-.66-2.64.643-2.372 1.789.264 1.129 1.858.671 2.488-.45ZM11.83 13.246c-1.603-.228-2.63 1.66-1.616 2.969a1.779 1.779 0 0 0 3.204-.844c.114-.808-.323-1.334-.487-1.535a1.911 1.911 0 0 0-1.102-.59ZM10.71 8.565c.898 1.034 2.76.452 2.931-.916a1.529 1.529 0 0 0-.434-1.249 1.585 1.585 0 0 0-.933-.448c-1.432-.165-2.47 1.568-1.564 2.613ZM17.57 25.047c-.042.453.988.021 1.622-.586.35-.331.394-.53.415-.626a.25.25 0 0 0-.03-.156c-.31-.46-1.944.648-2.008 1.368ZM17.153 1.28c.41.19.669.249.75.216.114-.047-.091-.239-.467-.436a5.856 5.856 0 0 0-.918-.375c-.087-.027-.526-.164-.593-.127.021.062.858.546 1.228.722ZM6.988 12.102c.669.945 2.292.552 2.522-.923a1.627 1.627 0 0 0-.302-1.264 1.27 1.27 0 0 0-.814-.458c-1.28-.162-2.187 1.544-1.406 2.645ZM11.822 20.888c-1.08-.135-1.651.898-.954 1.727.697.829 2.01.581 2.124-.405.06-.506-.248-.83-.364-.953a1.48 1.48 0 0 0-.806-.369ZM11.894 2.644c.397.469 1.543.264 1.635-.443a.665.665 0 0 0-.225-.572.805.805 0 0 0-.44-.19c-.737-.077-1.38.722-.97 1.205ZM15.31 24.617a.58.58 0 0 0-.046-.655.687.687 0 0 0-.277-.19c-.764-.298-1.675.363-1.416 1.022.258.66 1.381.548 1.74-.177ZM14.52 1.183c.351.04.606-.114.41-.382A1.096 1.096 0 0 0 14.51.51c-.396-.155-.561-.086-.625-.03-.21.186.065.634.635.704ZM8.482 4.998c.258.698 1.623.476 2.005-.533.113-.298.095-.59-.044-.801a.584.584 0 0 0-.234-.198c-.782-.37-2.022.733-1.727 1.532ZM9.432 18.922a1.618 1.618 0 0 0-.468-1.109c-.124-.115-.5-.465-1.05-.437-1.028.051-1.28 1.403-.416 2.224.82.774 1.938.38 1.934-.678ZM14.863 26.317c-.031.237.62.014.942-.19.26-.167.28-.277.286-.324a.158.158 0 0 0-.013-.056c-.154-.273-1.166.204-1.215.57ZM5.71 15.016a1.757 1.757 0 0 0-.302-1.072c-.095-.118-.315-.394-.676-.415-.886-.05-1.232 1.476-.513 2.268.601.667 1.452.217 1.492-.781ZM4.92 8.127c.264.628 1.322.33 1.695-.674.177-.476.065-.762.023-.872a.532.532 0 0 0-.262-.258c-.732-.31-1.792 1.005-1.457 1.804ZM12.055.693a.357.357 0 0 0 .133-.2.056.056 0 0 0-.015-.04c-.119-.107-.942.203-.95.434-.008.188.513.098.832-.194ZM10.474 24.48a1.17 1.17 0 0 0-.405-.504c-.308-.222-.596-.25-.749-.206-.442.124-.161.768.469 1.075.543.265.819.018.685-.365ZM12.72 25.845a.707.707 0 0 0-.458-.117c-.286.032-.328.251-.095.451.287.246.764.256.738-.054a.421.421 0 0 0-.184-.28ZM9.224 2.101c.181-.2.203-.31.213-.358a.103.103 0 0 0-.032-.095c-.242-.2-1.35.539-1.317.877.029.268.697.061 1.136-.424ZM6.944 21.802a1.686 1.686 0 0 0-.437-.608c-.44-.36-.705-.293-.798-.247-.452.223.057 1.233.757 1.502.461.177.688-.13.477-.647h.001ZM3.05 10.945c.066-.258.059-.529-.02-.783-.081-.217-.211-.27-.286-.286-.535-.095-1.018 1.225-.654 1.783.255.39.784.1.96-.714ZM5.565 4.448a1.12 1.12 0 0 0 .245-.483c0-.041.009-.11-.036-.144-.254-.19-1.218.762-1.146 1.131.052.258.566-.02.937-.504ZM3.074 17.794c-.17-.212-.35-.317-.486-.279-.41.113-.15 1.188.376 1.554.37.258.54-.11.436-.587a1.764 1.764 0 0 0-.326-.688ZM2.26 7.383c.062-.123.107-.253.134-.388.006-.044.017-.136-.03-.15-.173-.054-.669.822-.598 1.048.05.157.32-.157.493-.514v.004ZM.79 14.1c-.023-.06-.084-.224-.164-.213-.221.03-.176 1.09.054 1.275.135.108.217-.222.198-.58A1.785 1.785 0 0 0 .79 14.1Z\&quot;\/><\/g><\/svg>\n&quot;,&quot;height&quot;:&quot;40&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;background&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;,&quot;image&quot;:&quot;\/storage\/auth\/background.jpg&quot;,&quot;image_overlay_color&quot;:&quot;#ffffff&quot;,&quot;image_overlay_opacity&quot;:&quot;1&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;color&quot;:[{&quot;text&quot;:&quot;#00173d&quot;,&quot;button&quot;:&quot;#000000&quot;,&quot;button_text&quot;:&quot;#ffffff&quot;,&quot;input_text&quot;:&quot;#00134d&quot;,&quot;input_border&quot;:&quot;#232329&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;alignment&quot;:[{&quot;heading&quot;:&quot;center&quot;,&quot;container&quot;:&quot;center&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;favicon&quot;:[{&quot;light&quot;:&quot;\/storage\/auth\/favicon.png&quot;,&quot;dark&quot;:&quot;\/storage\/auth\/favicon-dark.png&quot;},{&quot;s&quot;:&quot;std&quot;}]},{&quot;s&quot;:&quot;std&quot;}],&quot;settings&quot;:[{&quot;redirect_after_auth&quot;:&quot;\/&quot;,&quot;registration_enabled&quot;:true,&quot;registration_show_password_same_screen&quot;:true,&quot;registration_include_name_field&quot;:false,&quot;registration_include_password_confirmation_field&quot;:false,&quot;registration_require_email_verification&quot;:false,&quot;enable_branding&quot;:true,&quot;dev_mode&quot;:false,&quot;enable_2fa&quot;:false,&quot;enable_email_registration&quot;:true,&quot;login_show_social_providers&quot;:true,&quot;center_align_social_provider_button_content&quot;:false,&quot;center_align_text&quot;:false,&quot;social_providers_location&quot;:&quot;bottom&quot;,&quot;check_account_exists_before_login&quot;:false},{&quot;s&quot;:&quot;std&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;453VUZxS8y4EGRjJ35gD&quot;,&quot;name&quot;:&quot;volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5sb2dpbiIsInBhdGgiOiJ2ZW5kb3JcXGRldmRvam9cXGF1dGhcXHJlc291cmNlc1xcdmlld3NcXHBhZ2VzXFxhdXRoXFxsb2dpbi5ibGFkZS5waHAifQ==&quot;,&quot;path&quot;:&quot;auth\/login&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;1c72ed0c14e5d9ad1090690c8aca9d78eec9627ff360f49f4b7fec17472b77bc&quot;}" wire:effects="[]" wire:id="453VUZxS8y4EGRjJ35gD" id="auth-container-parent" class="relative w-full sm:max-w-md sm:mx-auto">
                <div id="auth-container" class="flex relative top-0 z-20 flex-col justify-center items-stretch px-10 py-8 w-full h-screen bg-white  sm:top-auto sm:h-full  sm:rounded-xl">
                    <div class="flex flex-col sm:mx-auto sm:w-full  sm:max-w-md items-center" id="auth-heading-container" style="color:#00173d">
                        <div class="flex flex-col w-full items-center">
                            <a href="/" style="height:40px; width:auto; display:block" aria-label="Wave Logo" wire:navigate="">

                            </a>
                        </div>
                        <h1 id="auth-heading-title" class="mt-1 text-xl font-medium leading-9">Sign up</h1>

                    </div>

                    <form action="/register" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <div x-data="{ 
        focusedOrFilled: false,
        focused(){
            this.focusedOrFilled=true;
        },
        
    }" x-init=" setTimeout(function(){ $refs.input.focus(); }, 1);  " class="w-full h-auto">
                                <div class="flex relative flex-col justify-center h-11">
                                    <div class="flex relative">
                                        <label for="name" @click="$refs.input.focus()" :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused' : focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500' : !focusedOrFilled }" class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                            Name
                                        </label>


                                        <div class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                            <input data-auth="email-input" autocomplete="name" required="required" @focus-email.window="$el.focus()" id="name" name="name" type="text" x-ref="input" @focus="focused()" @blur="blurred()" class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div x-data="{ 
        focusedOrFilled: false,
        focused(){
            this.focusedOrFilled=true;
        },
        
    }" x-init=" setTimeout(function(){ $refs.input.focus(); }, 1);  " class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <label for="email" @click="$refs.input.focus()" :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused' : focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500' : !focusedOrFilled }" class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Email Address
                                    </label>


                                    <div data-model="email" class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input wire:model="email" data-auth="email-input" autocomplete="email" required="required" @focus-email.window="$el.focus()" id="email" name="email" type="email" x-ref="input" @focus="focused()" @blur="blurred()" class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>

                            </div>


                        </div>







                        <div x-data="{ 
        focusedOrFilled: false,
        focused(){
            this.focusedOrFilled=true;
        },
        
    }" x-init=" " class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="password" @click="$refs.input.focus()" :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused' : focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500' : !focusedOrFilled }" class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Password
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="password" class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input data-auth="password-input" autocomplete="current-password" @focus-password.window="$el.focus()" id="password" name="password" type="password" x-ref="input" @focus="focused()" @blur="blurred()" class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div x-data="{ 
        focusedOrFilled: false,
        focused(){
            this.focusedOrFilled=true;
        },
        
    }" x-init=" " class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="password" @click="$refs.input.focus()" :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused' : focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500' : !focusedOrFilled }" class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Confirm Password
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="password" class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input data-auth="password-input" autocomplete="current-password" @focus-password.window="$el.focus()" id="password_confirmation" name="password_confirmation" type="password" x-ref="input" @focus="focused()" @blur="blurred()" class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <button type="submit" data-auth="submit-button" class="auth-component-button px-4 py-2.5 text-sm font-medium rounded-md  opacity-[95%] hover:opacity-100 focus:ring-2 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center disabled:opacity-50 font-semibold focus:outline-none" style=" color:#ffffff; background-color:#000000; ">

                            Continue
                        </button>
                    </form>


                    <!--[if BLOCK]><![endif]-->
                    <div class="mt-3 space-x-0.5 text-sm leading-5 text-left" style="color:#00173d">
                        <span class="opacity-[47%]"> Already have an account? </span>
                        <a class="underline cursor-pointer opacity-[67%] hover:opacity-[80%]" data-auth="register-link" href="{{route('log-in')}}" wire:navigate="">
                            Log in
                        </a>
                    </div>

                    <div class="relative p-4">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 text-gray-500 bg-white"> OR </span>
                        </div>
                    </div>

                    <div class="flex justify-center align-center">
                        <button class="max-w-xs flex px-5 py-2 text-sm leading-5 font-bold text-center uppercase align-middle items-center rounded-lg border border-gray-300 gap-3 text-gray-800 bg-white cursor-pointer transition-all duration-600 hover:scale-105">
                            <svg height="24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                                <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                                <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                                <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                                <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                            </svg>
                            Continue With Google
                        </button>
                    </div>


                    <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
           
        </main>

    </div>
    <!-- Livewire Scripts -->
    <script>
        console.warn('Livewire: The published Livewire assets are out of date\n See: https://livewire.laravel.com/docs/installation#publishing-livewires-frontend-assets')
    </script>
    <script src="http://127.0.0.1:8000/vendor/livewire/livewire.js?id=cc800bf4" data-csrf="7ORYtyVDXJVOkXvmbpV12LAYSRYvsKI0pDf2P4bm" data-update-uri="/livewire/update" data-navigate-once="true"></script>

</body>

</html>