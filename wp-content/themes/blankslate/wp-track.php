<?php


 $wpFbUserSection = get_currentuserinfo();
 //var_dump($wpFbUserSection);
    $pageTitle = get_the_title();
    //echo $pageTitle;
if(current_user_can('subscriber')==1):
     $usuarioPx = 'valido';
else :
    $usuarioPx = 'null';
endif;
if($wpFbUserSection->user_firstname == NULL ):
        $wpFbUserSection->user_firstname = $wpFbUserSection->user_nicename;
endif;

//se houver pega os dados de cadastro do cookie
if($wpFbUserSection->user_email == NULL and isset($_COOKIE["protegido"]) ):
    $wpFbUserSection->user_email = $_COOKIE["protegido"];
    $wpFbUserSection->user_firstname = $_COOKIE["nome"];
    //var_dump($wpFbUserSection);
    //echo "";
endif;


//transforma string em letras minusculas
$wpFbUserSection->user_email = strtolower($wpFbUserSection->user_email);
$wpFbUserSection->user_firstname = strtolower($wpFbUserSection->user_firstname);
$wpFbUserSection->user_lastname = strtolower($wpFbUserSection->user_lastname);

//var_dump($wpFbUserSection);




//RASTREAMENTO MAUTIC
$d = urlencode(base64_encode(serialize(array(
    'page_url'   => 'http://' . $_SERVER[HTTP_HOST] . $_SERVER['REQUEST_URI'],
    'page_title' => $pageTitle,    // Use your website's means of retrieving the title or manually insert it
    'email' => $wpFbUserSection->user_email // Use your website's means of user management to retrieve the email
))));
echo '<img src="http://your-mautic.com/mtracking.gif?d=' . $d . '" style="display: none;" />';
   ?>


<script>
    $(function(){
        FB_PIXEL = '379326509076605';
        WP_USER = <?=json_encode($wpFbUserSection); ?>;
        
        if(WP_USER.caps.administrator == true){}else{
        
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

if(WP_USER.caps.subscriber == true){
fbq('init', FB_PIXEL,{
    fn:WP_USER.data.user_firstname , 
    em:WP_USER.data.user_email , 
    ln:WP_USER.data.user_lastname 
}); 
//fbq('track', 'CompleteRegistration');
}else if(typeof WP_USER.data.user_email != 'undefined'){
        fbq('init', FB_PIXEL,{
            fn:WP_USER.data.user_firstname,
            em:WP_USER.data.user_email
 });  
    
    }else{
    fbq('init', FB_PIXEL);
    }
fbq('track', 'PageView');
        };
        console.log(WP_USER.data.user_email);
        console.log(WP_USER.data.user_firstname);
});

</script>

<?php
if(current_user_can('administrator')==1):
        
    else:
    echo '<noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=379326509076605&ev=PageView&noscript=1"/></noscript>';
endif;







?>
