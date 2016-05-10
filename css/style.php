<?PHP 
session_start();
header("Content-type: text/css");

switch ($_SESSION['style']) 
{
    case 'vermelho':
        
        $ColorBack = '#9E191E';
        $BorderSearch = 'red';

    break;
    
    default:
        $BorderSearch = '#00A28A';        
        $ColorBack = '#0CA38B';

    break;
}

?>
/*
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* latin-ext */
@font-face {
  font-family: 'Libre Baskerville';
  font-style: normal;
  font-weight: 400;
  src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(http://fonts.gstatic.com/s/librebaskerville/v4/pR0sBQVcY0JZc_ciXjFsKwHlCYWexZJCPRz1QQ0uKVU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Libre Baskerville';
  font-style: normal;
  font-weight: 400;
  src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(http://fonts.gstatic.com/s/librebaskerville/v4/pR0sBQVcY0JZc_ciXjFsK6Ucnt8gjcHpqyffjHeZWDA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
.alert {
    padding: 10px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}
.warning {
    padding: 20px;
    background-color: #ff9800; /* Red */
    color: white;
    margin-bottom: 15px;
}
.success {
    padding: 20px;
    background-color: #228B22; /* Red */
    color: white;
    margin-bottom: 15px;
}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{ vertical-align:baseline;}/* vertical align baseline */
.vertical-top{  vertical-align:top;}/* vertical align top */
.underline{ padding-bottom:5px; border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{ display:block;}/* vertical menu */
nav.horizontal ul li{   display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
html{
    background: url(../images/light-bg.png);
}
body{
    font-family: 'Istok Web', sans-serif;
    font-size:100%;
    background:url(../images/header-bg-<?php echo $_SESSION['style']; ?>.jpg) repeat-x;
}
.wrap {
    width:960px;
    margin:0 auto;
    padding: 0 12px;
}
.welcome{
    float: left;
    margin-top: 13px;
    color: #867070;
    font-size: 12px;
    font-family: 'Libre Baskerville', serif;
}
.welcome span{
    color: #fff;
}
.top-nav{
    float: right;
    margin-top:9px; 
}
.top-nav li{
    display: inline;
}
.top-nav li a{
    color: #867070;
    font-size: 12px;
    margin: 0 4px;
}
.top-nav li a:hover{
    color: #eee;
}
.search{
    border: 1px solid <?php echo $BorderSearch ?>;
    margin-top: 24px;
    float: right;
    background: #fff;
    border-radius:1em;
   -webkit-box-shadow: inset -1px 1px 7px -1px #aaa;
      -moz-box-shadow: inset -1px 1px 7px -1px #aaa;
           box-shadow: inset -1px 1px 7px -1px #aaa;
}
.search input[type="text"]{
    background: none;
    padding:2px 5px;
    border: none;
    outline: none;
    color: #5E5E5E;
}
.search input[type="submit"]{
    background: url(../images/search.png) no-repeat -1px 2px;
    padding:2px 10px;
    width: 16px;
    border: none;
    cursor: pointer;
}
/*--header---*/
.header{
    margin-top:25px;
}
.logo{
    float: left;
}
.logo a{
    font-size:50px;
    color:#444;
}
.nav{
    margin:10px 0 0 0; 
    background: url(../images/nav-bg.jpg);
    font-family: 'Libre Baskerville', serif;
}
.nav li {
    display:inline-block;
    float: left;
    border-right:0px solid #000; 
}
.nav li a {
    color:#867070;
    font-size:11px;
    display:block;
    padding:10px 45px;
    text-transform:uppercase;
}
.nav li.active a,
.nav li a:hover{
    color:#fff;
}
.main-body{
    background: #fff;
    padding:12px 12px;
}
.content{
    float:left;
    border-right:1px solid #fff;
}
.slide img{
    padding: 12px;
    background: #fff;
    box-shadow: 0 0 8px #999;
    border-bottom: 1px solid #ffffff;
}
.slide{
    padding-bottom: 10px;
}
.hr{
    height: 2px;
    margin: 20px 0;
    background: url('../images/div.png') repeat-x;
}
/*--grids--*/
.grids{
    margin:15px 0;
    border-top:1px solid #eee; 
    padding-top: 15px;
    float: left;
    width: 705px;
}
.grids1{
    margin:15px 0;
    border-top:1px solid #eee; 
    padding-top: 15px;
    float: center;
    width: 100%;
}
.grids li img{
    padding: 5px;
    box-shadow: 0px 0px 5px #CDCDCD;
}
.grids li img:hover{
    cursor:pointer;
    box-shadow: 0px 0px 5px #777;
}
.grids li{
    float: left;
    display: inline;
    width: 214px;
    margin: 0 21px 0 0;
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;
}
.grids li:first-child{
    margin-left: 0;
}
.grids li.last{
    margin-right: 0;
}


.window{
    display:none;
    width:200px;
    height:200px;
    position:fixed;
    left:0;
    top:0;
    background:#FFF;
    z-index:9900;
    padding:10px;
    border-radius:10px;
}
 
#mascara{
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:9000;
    background-color:#000;
}
 
.fechar{display:block; text-align:right;}

.grids h3{
    color: <?php echo $ColorBack; ?>;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
.h3St
{
    color: <?php echo $ColorBack; ?>;
}

.grids p:hover{
    cursor: pointer;
    color: <?php echo $ColorBack; ?>;
}
.grids p{
    color: #888;
    font-size: 12px;
    padding:8px 0;
    background: #fff;
    line-height: 1.8em;
}
.grids button{
    color: #555;
    border: none;
    margin:6px 0;
    font-size:18px;
    border-radius: 1.3em;
    background:none;
    font-family: 'Libre Baskerville', serif;
}
.grids button:hover{
    color: <?php echo $ColorBack; ?>;
    cursor: pointer;
}
.grids h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background-color:<?php echo $ColorBack; ?>
}
.grids a{
    float: right;
    font-size: 12px;
    margin:0px 8px 10px 0px;
    font-family: 'Libre Baskerville', serif;
    text-transform:normal;
    background-color: <?php echo $ColorBack; ?>;
    padding:5px 7px;
    color:#fff;
}
.grids a-2{
    float: right;
    font-size: 12px;
    margin:0px 8px 10px 0px;
    font-family: 'Libre Baskerville', serif;
    text-transform:normal;
    background-color: <?php echo $ColorBack; ?>;
    padding:5px 7px;
    color:#fff;
}
.grids a:hover{
    text-decoration:underline;
}
/*footer*/
.footer1{
    border-top:1px solid #999;
    background: url(../images/nav-bg.jpg);
}
.footer1 ul{
    margin:0px;
    padding:0px;
}
.footer-grid1{
    width: 185px;
    float: left;
    padding: 10px;
    margin-right: 11px;
}
.footer-grid1 h3{
    color:#8A9997;
    padding: 10px 0 10px 0;
    font-size: 14px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
.footer-grid1 a{
    text-decoration: none;
    font-size: 12px;
    color: #867070;
    text-transform: none;
    line-height: 2;
}
.footer-grid1 a:hover{
    color:#fff;
}
.footer-grid1 img:hover{
    opacity:0.7;
}
/*social icons*/
.footer-grid2{
    width: 264px;
    float: left;
    padding: 10px 0px;
}
.footer-grid2 h3{
    color: #8A9997;
    padding: 10px 0 10px 0;
    font-size: 14px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
.footer-grid2 a{
    text-decoration: none;
    font-size: 14px;
    color: #444;
    text-transform: none;
    display: block;
    margin: 0px 8px 0px 0px;
}
.footer-grid2 a:hover{
    color:#000;
}
.footer-grid2 img:hover{
    opacity:0.7;
}
.footer-grid2 ul{
    margin-top:10px;
}
.footer-grid2 ul li{
    display: inline-block;
}
/*-----end of footer-----*/
/*-----order------*/
.order h4,.order p{
    border-bottom:1px solid silver;
    padding:10px 0px;
    font-size:16px;
}
.order span{
    color: <?php echo $ColorBack; ?>;
}
.order h5{
    font-size:12px;
    color:#888;
    margin:5px 0px;
}
.order h5:hover{
    color: <?php echo $ColorBack; ?>;
    cursor: pointer;
}
.order li h3{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background: url(../images/nav-bg.jpg);
    width:196px;
}
.order li a{
    font-size: 12px;
    margin: 0px 8px 10px 0px;
    font-family: 'Libre Baskerville', serif;
    text-transform: normal;
    background-color: <?php echo $ColorBack; ?>;
    padding: 5px 7px;
    color: white;
    margin-top:20px;
    float:right;
}
.order li a:hover{
    text-decoration:underline;
}
/*--boxes--*/
.boxes{
    
    height: 336px;

    margin: 15px 0;
    border-top: 1px solid #EEE;
    padding-top: 15px;
    width: 207px;
    float: right;
}
.prev{
    float: left;
}
.prev img{
    width: 150px;
    padding-right: 10px;
}
.text{
    float: right;
    width: 138px;
}
.boxes li{
    float: left;
    display: inline;
    margin: 0 21px 0 0;
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;    
}
.boxes li-boxes{
    float: left;
    display: inline;
    margin: 0 21px 0 0;
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;
    padding-top: 10px;
    height: 35px;
    padding-bottom: 11px;
    margin-bottom: 0px;    
}
.boxes li:first-child{
    margin-left: 0;
}
.boxes li.last{
    margin-right: 0;
}
.boxes h3{
    color: <?php echo $ColorBack; ?>;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 14px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
.boxes-cardapio h3{
    color: <?php echo $ColorBack; ?>;
    margin-top: 67px;
    padding-right: 0px;
    padding-left: 10px;    
    padding-top: 10px;
    padding-bottom: 10px;
    background: #fff;
    font-size: 14px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;


    

}
.boxes h4{
    color: #888;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
}
.boxes p{
    color: #888;
    font-size: 12px;
    background: #fff;
    line-height: 1.8em;
}
.boxes button{
    color: #888;
    border: none;
    margin:8px 0;
    font-size: 10px;
    padding: 0;
    font-weight: bold;
    background: none;
}
.boxes button:hover{
    color: #34A300;
    cursor: pointer;
    text-decoration: underline;
}
/*--text-box--*/
.text-box{
    margin: 30px 0 60px 0; 
}
.text-box p{
    font-size: 16px;
    color: #666;
    line-height: 1.9em;
}
/*--feedback--*/
.feed{
    padding:50px 0;
    margin-bottom:30px;
    font-family: 'Istok Web', sans-serif;
}
.feed2{
    padding:0px 0;
    margin-bottom:30px;
    width: 906px;
    font-family: 'Istok Web', sans-serif;
}
.feedback{
    font-size:16px;
    padding-bottom:10px;
    color:#464646;
    margin:0 0 0 30px;
    float:left;
}
.sla{
    font-size:16px;
    padding-bottom:10px;
    color:#464646;
    margin:0 0 0 30px;
    float:left;
}
.feedback table{
    border-collapse: collapse;
    width: 100%;
}
.feedback th, td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    width: 70px;
}
.feedback2{
    font-size:16px;
    padding-bottom:0;
    color:#464646;
    margin:0 0 0 30px;
}
.feedback3{
    font-size:16px;
    padding-bottom:0;
    color:#464646;
    margin:0 0 0 30px;
}
.pedido table img{
    padding: 2px;
    box-shadow: 0px 0px 2px #CDCDCD;
}
.feedback2 table img{
    padding: 2px; 
}
#linhatotal{
    background-color:<?php echo $ColorBack; ?>;
    color: #fff;
}
.feedback2 h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background-color:<?php echo $ColorBack; ?>;
}
.feedback3 h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background-color:<?php echo $ColorBack; ?>
}

.feedback2 h3{
    color: <?php echo $ColorBack; ?>;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
.feedback2 table{
    border-collapse: collapse;
    width: 100%;
}
.feedback2 td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
.feedback2 th {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
.feedback h1{
    font-size:28px;
    padding-bottom:10px;
    color:#464646;
}
.feedback2 h1{
    font-size:20px;
    padding-bottom:10px;
    color:#464646;
    width: 400px;
}
.feedback div{
    padding:10px;
}
.feedback label{
    color: #222;
}
.feedback span{ 
    display:block;
    padding:3px 0;
}
.feedback input[type="text"]{
    width:450px;
    padding:8px;
    font-size:16px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback2 input[type="text"]{
    width:250px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
#complement{
    width:100px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
#complementdados{
    width:100px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 5px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
#number{
    width:80px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback2 input[type="password"]{
    width:250px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback select{
    width:450px;
    padding:8px;
    font-size:16px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback2 select{
    width:250px;
    padding:8px;
        margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:16px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback input[type="password"]{
    width:450px;
    padding:8px;
    font-size:16px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback textarea{
    width:450px;
    height:100px;
    padding:5px;
    font-size:16px;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    font-size:16px;
    color:#333;
    outline: none;
    resize: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback input[type="submit"]{
    width:100px;
    padding:15px 8px;
    font-size:16px;
    background:#333;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
.feedback2 input[type="submit"]{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#95a5a6;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #tudo {
     width: 100%;
     height: 750px;
}
    #tudo1 {
    position:relative;
    width: 40%;
    height: 200px;
    left: 70px;
    float: left;
}
    #tudo2 {
    position: relative;
    width: 40%;
    left: 70px;
    height: 200px;
    float: left;
    top: 16px;
}
    #tudo3 {
    position: relative;
    width: 40%;
    height: 200px;
    float: left;
    margin-top: 182px;
    left: 98px;
    top: 0px;
    margin-bottom: 0px;
}
    #errormsg{
        margin-left: 100px;
        width: 70%;
        height: 13px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #linhatotal{
    background-color:<?php echo $ColorBack; ?>;
    color: #fff;
}
    #button2{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #buttoncam{
    width:100%;
    padding:8px 4px;
    font-size:16px;
    align:middle;
    background-color:<?php echo $ColorBack; ?>;
    border:none;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}

#cam{
    padding: 0px;
    box-shadow: 0px 0px 0px #CDCDCD;
    vertical-align:middle
}
    #button3{
    width:250px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
     margin-left: 170px;
    border:none;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #buttonmeusdados{
    width:250px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
    border:none;
    margin-left: 15px;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #button4{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
    margin-left: 0px;
    border:none;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #button1{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#c0392b;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
.feedback2 input[type="submit"]:hover{
    background:#2E1A19;
    color: #fff;
}

.feedback input[type="submit"]:hover{
    background:#2E1A19;
    color: #fff;
}
.feedback2 tr:nth-child(even){
    background-color: #f2f2f2;
}
.map{
    float: right;
    margin-right: 30px;
    box-shadow: 0 0 8px #666;
    margin-top:70px;
}
/*--Copy--*/
.copy{
    float: right;
    word-spacing:3px;
    padding:10px;
    color:#444;
    font-size:12px;
}
.copy a{
    color:#867070;
}
.copy a:hover{
    color: #fff;
    border-bottom:1px solid #867070;
}
/*----about----*/

.gridsabout h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background-color:<?php echo $ColorBack; ?>
}
.gridsabout{
    margin:15px 0;
    border-top:1px solid #eee; 
    padding-top: 15px;
    float: left;
    width: 100%;
}
.gridsabout p:hover{
    cursor: pointer;
    color: <?php echo $ColorBack; ?>;
}
.gridsabout p{
    color: #888;
    font-size: 16px;
    padding:8px 0;
    background: #fff;
    line-height: 1.8em;
}
.about-grid1 p{
    text-align:justify;
}
.about-grid2 p{

    width: 100%;
    float: left;
    text-align:justify;
}
.about-grid1 img{
    float:right;
    background:#fffff;
    padding:5px;
}
.about-grid1 img:hover{
    box-shadow: 0px 0px 4px #cdcdcd;
    cursor:pointer;
}
.about-grid1{
    margin:15px 0px;
}
/*-----gallery----*/
.gallery li img{
    background: #fff;
    padding: 0px;
    box-shadow: 0px 0px 5px #CDCDCD;
}
.gallery a{
    background-color:#fff;
    padding:5px;
}

