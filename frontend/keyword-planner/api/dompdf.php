<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// include autoloader
require __DIR__ . '/../../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('defaultFont', 'Times-Italic');
// instantiate and use the dompdf class
$dompdf = new Dompdf($options);
$dompdf->loadHtml('<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
    <title>keyword-planner</title>
    <style>
}
*{max-height:10000px;}
html{box-sizing:border-box;}
*, *:before, *:after{box-sizing:inherit;}
body{
    -webkit-text-size-adjust:100%;
    -ms-text-size-adjust:none;
    margin:0;
    min-width:320px;
    font:20px/1 \'Times-Italic\', Arial, Helvetica, sans-serif;
    color:#666;
    background:#fff;
}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section{display:block;}
figure{
    margin:0;
    padding:0;
}
img{
    vertical-align:top;
    max-width:100%;
    border:0;
}
a{
    color:#000;
    text-decoration:none;
    outline:none;
}
a:hover{text-decoration:underline;}
button::-moz-focus-inner{
    padding:0;
    border:0;
}
form,
fieldset{
    margin:0;
    padding:0;
    border:0;
}
input,
textarea,
select{
    font:12px Arial, Helvetica, sans-serif;
    vertical-align:middle;
    outline:none;
}
:active, :hover, :focus {
    outline: 0;
    outline-offset: 0;
}
:-moz-placeholder{
    color: #666;
}
::-webkit-input-placeholder{
    color: #666;
}
:-ms-input-placeholder{
    color: #666;

}
::-moz-placeholder{
    color: #666;
    opacity: 1;
}
input[type="image"]{padding:0;border:none;}
input[type=url], input[type=search], input[type=tel], input[type=email], input[type=text], input[type=password], input[type=file], input[type=submit], textarea{
    -webkit-appearance:none;
    background: transparent;
}
input[type="search"]::-webkit-search-cancel-button{-webkit-appearance: none;}
input:-webkit-autofill {
    background: #fcce01 !important;
    -webkit-box-shadow:  0 0 0 50px #fcce01 inset !important;
    -webkit-text-fill-color: #666;
}
input:focus::-moz-placeholder,
textarea:focus::-moz-placeholder{
    color:transparent;
}
input:focus::-webkit-input-placeholder,
textarea:focus::-webkit-input-placeholder{
    color:transparent;
}
input:focus:-ms-input-placeholder,
textarea:focus:-ms-input-placeholder{
    color:transparent;
}
button[type="submit"]{
    cursor: pointer;
}
p{
    margin: 0 0 13px;
}
.clearfix:after{
    content: \'\';
    display: block;
    clear: both;
}
.login-frame{
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.login-frame .text-holder{
    background: #515c63 url(../assets/login-bg.png) no-repeat 87% 75%;
    width: 67%;
    color: #fff;
    padding: 52px 40px 98px 110px;
    position: relative;
    min-height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.login-frame h1{
    margin: 0 0 47px -12px;
    color: #ffce00;
    font: 166px/1 \'flamabasic\', Arial, Helvetica, sans-serif;
}
.login-frame .text{
    max-width: 960px;
    font-size:44px;
    line-height: 1.15;
}
.login-frame .copyright{
    position: absolute;
    bottom: 50px;
    padding: 0 0 0 11px;
    color: #b3b3b3;
    font-size:35px;
    left: 110px;
}
.login-form{
    padding: 52px 75px 52px 71px;
    width: 33%;
    background: #fcce01;
    min-height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.login-form .input-group{
    width: 100%;
}
.login-form .input-row{
    margin: 67px 0 0;
    overflow: hidden;
}
.login-form .input-row:first-child{
    margin: 0;
}
.login-form .input-row:last-child{
    margin: 56px 0 0;
}
.login-form input{
    width: 100%;
    display: block;
    font-size:27px;
    padding: 13px 0;
    border: solid #515c63;
    border-width: 0 0 1px;
    background: transparent;
    box-shadow: none;
}
.login-form button[type="submit"]{
    float: right;
    padding: 11px 27px 11px 36px;
    cursor: pointer;
}
.btn{
    display: inline-block;
    vertical-align: top;
    color: #fff;
    text-align: center;
    border-radius: 26px;
    background: #ffce00;
    border: 1px solid #ffce00;
    padding: 11px 27px;
    transition: all 0.3s ease-out;
    font:24px \'flamabook\', Arial, Helvetica, sans-serif;;
}
.btn:hover{
    background: #fff;
    color: #ffce00;
    text-decoration: none;
}
.btn.gray{
    background: #515c63;
    border: 1px solid #515c63;
}
.btn.gray:hover{
    background: transparent;
    color: #515c63;
    border-color: #515c63;
}
.btn:hover .arrow-left{
    background-position: 0 -39px;
}
.btn.no-active{
    background: #515c63;
    border: 1px solid #515c63;
    cursor:wait !important;
}
.btn.no-active:hover{
    color: #fff;
}
.arrow-left{
    background: url(../assets/sprite.png) no-repeat;
    width: 11px;
    height: 24px;
    display: inline-block;
    vertical-align: middle;
}
.btn .arrow-left{
    margin: 0 0 0 16px;
}
/*----------- targetLocations styles ----------------*/
.content-holder h1{
    font: 58px/1 \'flamabook\', Arial, Helvetica, sans-serif;
    color: #333;
    margin: 0 0 38px;
}
.number{
    display: inline-block;
    width: 58px;
    height: 58px;
    color: #fff;
    font-size: 30px;
    line-height: 56px;
    vertical-align: top;
    text-align: center;
    background: #fcce01;
    border-radius: 50%;
    margin: 0 47px 0 0;
}
.content-holder{
    max-width: 2052px;
    margin: 0 auto;
    padding: 33px 0;
}
.title-block{
    padding: 0 0 40px;
}
.location-content{
    margin: 0 -26px 15px;
    font-family: \'flamabook\', Arial, Helvetica, sans-serif;
}
.location-holder{
    padding: 0 26px;
    width: 50%;
    float: left;
}
.search-form{
    background: #f2f2f2;
    margin: 0 0 45px;
}
.autocomplete-wrapper{
    position: relative;
}
.search-form .autocomplete-input{
    color: #b3b3b3;
    width: 100%;
    height: 107px;
    display: block;
    border: none;
    font:33px/1.3 \'flamabook\', Arial, Helvetica, sans-serif;
    padding: 27px 112px 38px 27px;
}
.search-form .autocomplete-input:-moz-placeholder{
    color: #b3b3b3;
}
.search-form .autocomplete-input::-webkit-input-placeholder{
    color: #b3b3b3;
}
.search-form .autocomplete-input:-ms-input-placeholder{
    color: #b3b3b3;

}
.search-form .autocomplete-input::-moz-placeholder{
    color: #b3b3b3;
    opacity: 1;
}
.autocomplete-wrapper .autocomplete-list{
    position: absolute;
    top: 100%;
    left:0;
    right:0;
    background: #f2f2f2;
    color: #b3b3b3;
    border-top: 1px solid #b3b3b3;
    font-size:20px;
    z-index: 9;
}
.autocomplete-wrapper .autocomplete-list ul{
    margin: 0;
    padding: 27px 0;
    list-style: none;

}
.autocomplete-wrapper .autocomplete-list a{
    color: #b3b3b3;
    display: block;
    padding: 10px 27px;
}
.autocomplete-wrapper .autocomplete-list a:hover{
    background: #b3b3b3;
    text-decoration: none;
    color: #f2f2f2;
}
.search-form input[type=\'submit\']{
    float: right;
    width: 107px;
    background:#fcce01 url(../assets/sprite.png) no-repeat 31px -72px;
    text-indent: -9999px;
    border: none;
    height: 107px;
    margin: -107px 0 0;
    cursor: pointer;
}
.results-list{
    padding: 0;
    margin: 0 0 15px;
    list-style: none;
    border: 1px solid #f2f2f2;
    font-size:33px;
    color: #00b3e3;
}
.find-keywords .results-list{
    margin-bottom: 70px;
}
.results-list .title{
    background: #f2f2f2;
    color: #808080;
    font-family: \'flamalight\', Arial, Helvetica, sans-serif;
    padding: 20px 26px 29px;
}
.results-list li{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    border-bottom: 1px solid #f2f2f2;
    padding: 16px 25px 12px;
}
.results-list li:last-child{
    border: none;
}
.results-list .width1{
    width: calc(100% - 255px);
}
.results-list p{
    margin: 0;
}
.results-list .width2{
    width: 250px;
    font-size:26px;
    text-align: right;
}
.results-list .func{
    display: inline-block;
    vertical-align: top;
    border-right: 1px solid #ccc;
    padding: 0 10px 13px;
    cursor: pointer;
    transition: all 0.3s ease-out;
}
.results-list .func:hover{
    color: #fcce01;
}
.results-list .func:last-child{
    border: none;
}
.map-holder{
    float: left;
    width: 50%;
    padding: 48.8% 26px 0;
    position: relative;
}
.vue-map-container{
    width: calc(100% - 52px) !important;
    height:  100% !important;
    position: absolute !important;
    top: 0;
    left: 26px;
    right: 26px;
}
/*----------- RoiCalculator page styles --------------*/
.calculate-holder{
    padding: 74px 0;
}
.content-holder h2{
    margin: 0 0 20px;
    color: #ffce00;
    font: 44px/1.2 \'flamabasic\', Arial, Helvetica, sans-serif;
}
.calculate-holder h2{
    margin: 0 0 92px;
}
.content-holder .table{
    width: 100%;
    font:32px/1 \'Times-Italic\', Arial, Helvetica, sans-serif;
    margin: 0 0 126px;
}
.content-holder .table th{
    background: #f2f2f2;
    color: #333;
    text-align: left;
    font-family: \'Times-Italic\', Arial, Helvetica, sans-serif;
    padding: 40px 36px 49px;
}
.content-holder .table th,
.content-holder .table td{
    border: solid #f2f2f2;
    border-width: 0 0 1px;
    border-collapse: collapse;
}
.content-holder .table td{
    padding: 57px 33px 61px;
}
.content-holder .table td:last-child{
    text-align: right;
    padding-right: 82px;
}
.content-holder .table tfoot td{
   padding-top: 32px;
    padding-bottom: 32px;
    border: none;
}
.content-holder .table .total{
    display: inline-block;
    vertical-align: top;
    padding: 0 30px 0 0;
}
.calculate-form{
    font-size:47px;
    border-bottom: 2px solid #cecece;
    padding: 0 0 96px;
    margin: 0 0 93px;
}
.calculate-form .field{
    display: inline-block;
    vertical-align: middle;
    padding: 0 0 0 113px;
}
.calculate-form label{
    display: inline-block;
    vertical-align: middle;
}
.calculate-form .field:first-child{
    padding: 0;
}
.calculate-form input[type=\'text\']{
    display: inline-block;
    vertical-align: top;
    font-size:47px;
    border: 2px solid #e6e6e6;
    margin: 0 0 10px 82px;
    width: 100%;
    padding: 29px 10px 27px;
    text-align: center;
}
.calculate-form .width1{
    max-width: 175px;
}
.calculate-form .width2{
    max-width: 223px;
}
.calculate-form .width3{
    max-width: 253px;
}
.calculate-form .currency-box{
    position: relative;
    padding: 0 0 0 59px;
    display: inline-block;
    vertical-align: middle;
}
.calculate-form .currency-box .currency{
    display: inline-block;
    vertical-align: middle;
    font-size:57px;
    color: #b3b3b3;
    line-height: 2;
}
.calculate-form .currency-box input{
    margin: 0 0 10px;
}
.calculate-form .submit-row{
    padding: 84px 0 20px;
}
.calculate-form input[type=\'submit\']{
    display: block;
    width: 100%;
    cursor: pointer;
    background: #fcce01;
    font-size:42px;
    padding: 14px 15px 19px;
    border-radius: 38px;
}
.calculate-form input[type=\'submit\']:hover{
    background: #fff;
}
.calculate-text{
    font: 65px/1.18 \'flamabook\', Arial, Helvetica, sans-serif;
    color: #333;
    padding: 0 34px;
}
/*----------------- find keywords page styles ----------*/
.btn-logout{
    margin:0 0 10px 10px;
    float: right;
}
.gray-bg{
    background: #d7dbdd;
    padding: 10px 0;
}
.keyword-form{
    padding: 4px 0 104px;
}
.keyword-form .buttons-holder{
    float: right;
    width: 24.7%;
    margin: 0 0 0 10px;
}
.keyword-form .buttons-holder .btn{
    border-radius:0;
    text-transform: uppercase;
    font-size:32px;
    cursor: pointer;
    height: 106px;
    width: 56.8%;
    text-align: center;
    padding: 20px 10px;
    margin: 0 0 0 10px;
}
.keyword-form .buttons-holder .btn:first-child{
    margin: 0;
}
.keyword-form .buttons-holder .btn.reset{
    width: 38.85%;
}
.keyword-form .search-field{
    overflow: hidden;
}
.keyword-form input[type="text"],
.keyword-form input[type="password"]{
    width: 100%;
    background: #fff;
    color: #666;
    font: 39px/1.2 \'flamabook\', Arial, Helvetica, sans-serif;
    border: none;
    padding: 24px 35px 35px;
}
.keyword-form .help{
    margin: 10px 0 0;
    display: block;
}
.btn.reset{
    background: #999;
    border-color:#999;
}
.btn.reset:hover{
    background: #fff;
    color: #999;
}
.btn-next{
    float: right;
}
.btn-prev{
    float: left;
}
.chart-holder{
    border: 2px solid #f2f2f2;
    padding: 46px 58px 65px;
}
.download-block{
    padding: 78px 0 242px;
}
.download-block .btn-simple{
    float: right;
}
.btn-simple{
    color: #4d4d4d;
    background: #f2f2f2;
    border: 1px solid #ededed;
    font-size:31px;
    padding: 19px 29px 20px;
    transition: all 0.3s ease-out;
}
.btn-simple:hover{
    text-decoration: none;
    background: #4d4d4d;
    border-color: #4d4d4d;
    color: #f2f2f2;
}
.btn-simple .icon-download{
    display: inline-block;
    vertical-align: top;
    background: url(../assets/sprite.png) no-repeat 0 -178px;
    width: 23px;
    height: 35px;
    margin: 0 19px 0 0;
}
.btn-simple:hover .icon-download{
    background-position: -39px -178px;
}
.content-holder .table.result-table{
    border: solid #f3f3f3;
    border-width: 0 2px;
    border-spacing: 0;
    margin: 0 0 56px;
}
.content-holder .table.result-table th{
    font-size:32px;
    border: 2px solid #f3f3f3;
}
.content-holder .table.result-table td:last-child{
    padding-right: 36px;
}
.content-holder .table .width1{
     width: 55%;
 }
.content-holder .table .width2{
    width: 45%;
    text-align: right;
}
.content-holder .table td.width2{
    padding-right: 10%;
}
.content-holder .table.result-table .text{
    display: inline-block;
    vertical-align: middle;
}
.content-holder .table .select-holder{
    text-align: left;
    vertical-align: middle;
}
.content-holder .table .select-holder .select-button{
    background: #e6e6e6;
    border-color: #c8c8c8;
    margin: 0 0 0 15px;
}
.content-holder .table .select-holder .select-list{
    background: #e6e6e6;
    border-color: #c8c8c8;
    left: 15px;
    right: 0;
}
.add-btn{
    display: block;
    width: 51px;
    height: 51px;
    border: 2px solid #ffce00;
    border-radius: 50%;
    text-align: center;
    background: #fff;
    color: #ffce00;
    font: 42px/40px \'flamabasic\', Arial, Helvetica, sans-serif;
    margin: 0 auto;
    transition: all 0.3s ease-out;
    cursor: pointer;
    position: relative;
}
.add-btn:hover{
    background: #ffce00;
    color: #fff;
    text-decoration: none;
}
.add-btn.plus{
    background: #ffce00;
    color: transparent;
}
.add-btn.plus:before{
    content: \'\';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    width: 21px;
    height: 3px;
}
.info-holder{
    padding: 0 0 74px;
}
.info-holder .pagination{
    float: right;
    color: #ccc;
    font-size:42px;
    padding: 0 6px;
}
.pagination>span{
    display: inline-block;
    vertical-align: middle;
    letter-spacing:-1px;
    padding: 0 36px;
    cursor: pointer;
    transition: all 0.3s ease-out;
}
.pagination>span:hover{
    color: #fcce01;
}
.pagination .first-page .arrow{
    margin: 0 0 0 -12px;
}
.pagination .last-page .arrow{
    margin: 0 -5px 0 0;
}
.pagination .arrow{
    font-size:80px;
    display: inline-block;
    vertical-align: top;
    line-height: 30px;
}
.info-holder .pagination>span:last-child{
    padding: 0 0 0 30px;
}
.info-holder .info-block{
    float: right;
    letter-spacing:-1px;
    padding: 0 36px 0 0;
    font: 34px/1.2 \'flamabook\', Arial, Helvetica, sans-serif;
}
.info-block>span{
    display: inline-block;
    vertical-align: middle;
}
.select-holder{
    display: inline-block;
    vertical-align: top;
    position: relative;
    color: #4d4d4d;
}
.select-holder .select-button{
    background: #f2f2f2;
    border: 1px solid #ededed;
    color: #4d4d4d;
    font-size:27px;
    position: relative;
    display: inline-block;
    vertical-align: top;
    padding: 18px 88px 20px 20px;
    margin: 0 40px;
    cursor: pointer;
}
.select-holder .select-button:after{
    content: \'\';
    background: url(../assets/sprite.png) no-repeat -85px -176px;
    width: 25px;
    height: 13px;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translate(0,-50%);
}
.select-holder.open .select-button:after{
    background-position: -85px -206px;
}
.select-holder .select-list{
    position: absolute;
    margin: 0;
    padding: 0;
    list-style: none;
    font-size:25px;
    background: #f2f2f2;
    border: 1px solid #ededed;
    top: 100%;
    left: 40px;
    right:40px;
    max-height: 0;
    opacity:0;
    transform: translate(0, -100%;)
    transition: all 0.3s ease-out;
}
.select-holder.open .select-list{
    max-height: 4000px;
    opacity:1;
    transform: translate(0, 0;)
}
.select-holder .select-list li{
    padding: 10px 20px;
    cursor: pointer;
    transition: all 0.3s ease-out;
}
.select-holder .select-list li:hover{
    background: #fcce01;
    color: #fff;
}
.loading{
    display: block;
    margin: 0 auto;
}
/*---------- User management page styles --------------*/
.add-form-holder{
    /*display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;*/
    clear: both;
    display: block;
    content: \'\';
}
.add-form .input-row{
    float: left;
    width: 40%;
    padding:0 0 0 10px;
}
.add-form .input-row:first-child{
    padding: 0;
}
.add-form .buttons-holder{
    float: left;
    width: 20%;
    padding:0 0 0 10px;
    margin: 0;
}
.add-form .buttons-holder .btn{
    width: 100%;
}
.users-table th,
.users-table td{
    width: 40%;
    word-break: break-all;
    word-wrap: break-word;
}
.users-table th:last-child,
.users-table td:last-child{
    width: 20%;
}
.content-holder .table.users-table td:last-child{
    text-align: center;
    padding-right: 33px;
}
@media only screen and (max-width: 2060px){
    .content-holder{
        max-width: none;
        padding: 33px 113px;
    }
    /*----------------- find keywords page styles ----------*/
    .keyword-form .buttons-holder{
        width: 33%;
    }
    .add-form .buttons-holder{
        width: 20%;
    }
}
@media only screen and (max-width: 1800px){
    .login-frame h1{
        font-size:87px;
    }
    .login-frame .text-holder{
        padding: 49px 44px 100px;
    }
    .login-frame .copyright{
        left: 44px;
    }
    /*----------- targetLocations styles ----------------*/
    .content-holder{
        padding: 60px 80px;
    }
    .content-holder h1{
        font-size:37px;
    }
    .number{
        width: 38px;
        height: 38px;
        font-size:20px;
        line-height: 36px;
        margin: 0 30px 0 0;
    }
    .search-form .autocomplete-input{
        font-size:20px;
        padding: 20px 72px 24px 22px;
        height: 70px;
    }
    .search-form input[type="submit"]{
        width: 70px;
        height: 70px;
        margin: -70px 0 0;
        background-position: -54px 17px;
    }
    .location-content{
        margin: 0 -17px 15px;
    }
    .location-holder{
        padding: 0 17px;
    }
    .map-holder{
        padding: 54.3% 17px 0;
    }
    .results-list{
        font-size:21px;
    }
    .results-list .width2{
        font-size:17px;
    }

    /*----------- RoiCalculator page styles --------------*/
    .content-holder h2{
        font-size:32px;
    }
    .content-holder .table{
        font-size:16px;
        margin: 0 0 30px;
    }
    .content-holder .table th,
    .content-holder .table td{
        padding: 15px 16px 18px;
    }
    .content-holder .table td:last-child{
        padding-right: 20px;
    }
    .calculate-form{
        font-size:23px;
        padding: 0 0 40px;
        margin: 0 0 40px;
        text-align: center;
    }
    .calculate-form .field{
        padding: 0 0 0 60px;
    }
    .calculate-form .field:first-child{
        padding: 0;
    }
    .calculate-form input[type="text"]{
        font-size:27px;
        padding: 13px 10px;
        margin: 0 0 10px 40px;
    }
    .calculate-form .currency-box input[type="text"]{
        margin: 0 0 10px;
    }
    .calculate-form .currency-box .currency{
        font-size:30px;
    }
    .calculate-form .submit-row{
        padding: 55px 0 20px;
    }
    .calculate-form input[type="submit"]{
        font-size:20px;
    }
    .calculate-text{
        font-size:31px;
        padding: 0 15px;
    }
    /*----------------- find keywords page styles ----------*/
    .keyword-form{
        padding: 4px 0 50px;
    }
    .keyword-form input[type="text"],
    .keyword-form input[type="password"] {
        padding: 21px 22px 22px;
        font-size: 20px;
    }
    .keyword-form .buttons-holder{
        width: 36%;
    }
    .add-form .buttons-holder{
        width: 20%;
    }
    .keyword-form .buttons-holder .btn {
        font-size: 20px;
        height: auto;
        margin: 0;
    }
    .download-block{
        padding: 30px 0 70px;
    }
    .content-holder .table.result-table th{
        font-size:16px;
    }
    .info-holder .pagination{
        font-size:32px;
    }
    .pagination .arrow{
        font-size:52px;
        margin-top: -3px;
    }
    .pagination .first-page .arrow{
        margin: -3px 0 0 -7px;
    }
    .pagination .last-page .arrow{
        margin: -3px -3px 0 0;
    }
    .info-holder .info-block{
        font-size:28px;
    }
    .select-holder .select-button{
        font-size:24px;
        padding: 14px 70px 15px 15px;
    }
    .content-holder .table .select-holder .select-button{
        padding: 10px 50px 10px 10px;
        font-size:18px;
    }
    .select-holder .select-list{
        font-size:22px;
    }
    .content-holder .table .select-holder .select-list{
        font-size:16px;
    }
    .content-holder .table .select-holder .select-list li{
        padding: 5px 10px;
    }
    .content-holder .table td.width2{
        padding-right: 4%;
    }
    .content-holder .table.users-table td:last-child{
        padding-right: 16px;
    }
}
@media only screen and (max-width: 1500px){
    /*----------- targetLocations styles ----------------*/
    .title-block{
        text-align: center;
    }
    .search-form{
        margin: 0 0 27px;
    }
    .results-list li{
        padding: 9px 10px 15px 17px;
    }
    .results-list .title{
        padding: 13px 20px 18px;
    }
    .results-list .width1{
        width: calc(100% - 162px);
    }
    .results-list .width2{
        width: 162px;
    }
    .results-list .func{
        padding: 0 4px 6px;
    }
}
@media only screen and (max-width: 1120px){
    p{
        margin: 0 0 7px;
    }
    .login-frame .text-holder{
        width: 64.6%;
    }
    .login-frame h1{
        margin: 0 0 40px -5px;
    }
    .login-frame .text{
        max-width: 500px;
        font-size:22px;
        line-height: 1.18;
    }
    .login-form{
        width: 35.4%;
        padding: 20px 30px 20px 26px;
    }
    .login-form input{
        font-size:18px;
        padding: 9px 0;
    }
    .login-form .input-row{
        margin: 40px 0 0;
    }
    .login-form .input-row:last-child{
        margin: 36px 0 0;
    }
    .btn{
        font-size:18px;
    }
    .login-form .btn{
        background: #fcce01;
        color: #666;
        padding: 5px 18px 6px 30px;
    }
    .login-form .btn .arrow-left{
        background-position: -21px -42px;
        width: 9px;
        height: 18px;
        margin: 0 0 0 12px;
    }
    .login-form .btn:hover{
        background: #666;
        color: #fff;
    }
    .login-form .btn:hover .arrow-left{
        background-position: -38px -42px;
    }
    .login-frame .copyright{
        font-size:20px;
        padding: 0;
        bottom:42px;
    }
    .logo-copyright img{
        width: 168px;
        height: 22px;
    }
    /*----------- targetLocations styles ----------------*/
    .content-holder{
        padding: 31px 20px;
    }
    .results-list .width1{
        width: calc(100% - 133px);
        padding: 0 10px 0 0;
        word-wrap: break-word;
    }
    .results-list .width2{
        width: 133px;
    }
}
@media only screen and (max-width: 1100px) {
    p{
        margin: 0 0 14px;
    }
    .login-frame{
        flex-wrap: wrap;
        height: 100%;
        min-height:100vh;
        justify-content: flex-start;
    }
    .login-frame .text-holder{
        width: 100%;
        min-height: 68.45%;
        padding: 50px 34px 30px;
        -webkit-background-size: 446px 363px;
        background-size: 446px 363px;
        background-position: 77% 55%;
    }
    .login-frame .text{
        font-size:30px;
        line-height: 1.17;
        max-width: 80%;
    }
    .login-frame .copyright{
        bottom: auto;
        top: 18px;
        text-align: right;
        right: 28px;
        font-size:18px;
    }
    .login-form{
        width: 100%;
        min-height: 31.55%;
        padding: 20px 38px 20px 31px;
    }
    .login-frame h1{
        font-size:85px;
        margin: 0 0 25px;
    }
    .login-form .btn{
        padding: 5px 16px 8px 30px;
    }

}
@media only screen and (max-width: 992px){
    .info-holder{
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    .info-holder .info-block{
        order: 1;
        letter-spacing: 0;
    }
    .info-holder .pagination{
        order: 2;
    }
    .select-holder .select-button{
        text-align: left;
    }
    .select-holder .select-list{
        text-align: left;
    }
    #chart-1{
        width: 100% !important;
    }

}
@media only screen and (max-width: 767px){
    .login-frame .text-holder{
        min-height: 62.2%;
        -webkit-background-size: 270px 220px;
        background-size: 270px 220px;
    }
    .login-frame .copyright{
        right: 10px;
        top: 11px;
        font-size:11px;
    }
    .login-frame h1{
        font-size:52px;
        margin: 0 0 30px;
    }
    .login-frame .text{
        font-size:18px;
        line-height: 1.2;
    }
    .logo-copyright img{
        width: 92px;
        height: 12px;
    }
    .login-form{
        min-height: 37.8%;
        padding: 10px 20px;
    }
    .login-form input{
        font-size:15px;
        padding: 8px 0;
    }
    .login-form .input-row{
        margin: 36px 0 0;
    }
    .login-form .input-row:last-child{
        margin: 30px 0 0;
    }
    .btn{
        font-size:16px;
    }
    .login-form button[type="submit"]{
        padding: 4px 13px 6px 22px;
    }
    /*----------- targetLocations styles ----------------*/
    .title-block{
        text-align: left;
        padding: 0;
    }
    .content-holder h1{
        font-size:25px;
        margin: 0 0 26px;
    }
    .number{
        font-size:13px;
        line-height: 23px;
        width: 25px;
        height: 25px;
        margin: 0 20px 0 0;
    }
    .location-content{
        margin: 0 0 15px;
    }
    .location-holder{
        float: none;
        width: 100%;
        padding: 0 0 10px;
    }
    .search-form{
        margin: 0 0 19px;
    }
    .search-form .autocomplete-input{
        height: 43px;
        font-size:13px;
        padding: 8px 50px 10px 10px;
    }
    .search-form input[type="submit"]{
        height: 43px;
        width: 43px;
        margin: -43px 0 0;
        background-position: -79px -53px;
    }
    .autocomplete-wrapper .autocomplete-list{
        font-size:13px;
    }
    .autocomplete-wrapper .autocomplete-list ul{
        padding: 10px 0;
    }
    .autocomplete-wrapper .autocomplete-list a{
        padding: 5px 10px;
    }
    .results-list{
        font-size:11px;
    }
    .results-list .width1{
        width: auto;
    }
    .results-list .width2{
        font-size:10px;
        width: auto;
    }
    .results-list li{
        padding: 7px 6px 8px;
    }
    .results-list .title{
        padding: 7px 8px 9px;
    }
    .results-list .func{
        padding: 0 4px;
    }
    .map-holder{
        float: none;
        width: 100%;
        padding: 79% 0 0;
    }
    .vue-map-container{
        left:0;
        right:0;
        width: 100% !important;
    }
    .calculate-holder{
        padding: 20px 0;
    }
    .calculate-form{
        text-align: left;
    }
    .calculate-form .field,
    .calculate-form .field:first-child{
        display: block;
        padding: 0 0 10px;
    }
    .calculate-form label{
        display: block;
        padding: 0 0 10px;
    }
    .calculate-form .currency-box{
        display: block;
        padding: 0;
    }
    .calculate-form input[type="text"]{
        margin: 0;
    }
    .calculate-form .width1,
    .calculate-form .width2,
    .calculate-form .width3{
        max-width: none;
    }
    .calculate-form input[type="text"].width2,
    .calculate-form input[type="text"].width3{
        width: calc(100% - 25px);
    }
    .calculate-text{
        font-size:20px;
    }

    /*----------------- find keywords page styles ----------*/
    .btn-logout{
        margin: 0 0 20px;
    }
    .gray-bg{
        padding: 10px 0 0;
    }
    .keyword-form{
        padding: 26px 0 0;
    }
    .keyword-form .buttons-holder{
        margin: 0 0 0 2px;
        width: auto;
    }
    .keyword-form .buttons-holder .btn{
        font-size:9px;
        padding: 8px 4px 9px;
        width: auto;
    }
    .keyword-form .buttons-holder .btn.reset{
        width: auto;
    }
    .keyword-form input[type="text"],
    .keyword-form input[type="password"]{
        padding: 8px 10px 9px;
        font-size:11px;
    }
    #chart-1{
        width: 100% !important;
        height: 300px !important;
    }
    .chart-holder{
        padding: 7px 10px 5px;
    }
    .download-block{
        padding: 10px 0 6px;
    }
    .btn-simple{
        font-size:11px;
        padding: 8px 10px 9px;
    }
    .btn-simple .icon-download{
        background-position: 0 -235px;
        width: 10px;
        height: 15px;
        margin: -3px 9px 0 0;
    }
    .btn-simple:hover .icon-download{
        background-position: -23px -235px;
    }
    .add-btn{
        height: 30px;
        width: 30px;
        font-size:24px;
        line-height: 24px;
        border-width: 1px;
    }
    .add-btn.plus:before{
        width: 15px;
        height: 2px;
    }
    .content-holder .table th,
    .content-holder .table td{
        padding: 15px 10px 18px;
    }
    .content-holder .table.result-table td:last-child{
        padding-right: 10px;
    }
    .content-holder .table td.width2{
        padding-right: 10px;
        text-align: center;
    }
    .info-holder .pagination{
        font-size:18px;
    }
    .pagination .arrow{
        font-size:34px;
        margin-top: -9px;
    }
    .pagination .first-page .arrow{
        margin: -9px 0 0 -3px;
    }
    .pagination .last-page .arrow{
        margin: -9px -1px 0 0;
    }
    .pagination > span{
        padding: 0 10px;
    }
    .info-holder .pagination > span:last-child{
        padding: 0 0 0 10px;
    }
    .info-holder .info-block{
        padding: 0 0 10px;
        font-size:16px;
    }
    .select-holder .select-button,
    .content-holder .table .select-holder .select-button{
        font-size:16px;
        margin: 0 10px;
        padding: 6px 43px 7px 10px;
        text-align: left;
    }
    .content-holder .table .select-holder .select-button:after,
    .select-holder .select-button:after{
        background-position: -93px -110px;
        width: 17px;
        height: 10px;
        right: 10px;
    }
    .content-holder .table .select-holder.open .select-button:after,
    .select-holder.open .select-button:after{
        background-position: -93px -142px;
    }
    .content-holder .table .select-holder .select-list,
    .select-holder .select-list{
        left:10px;
        right:10px;
        text-align: left;
        font-size:14px;
    }
    .content-holder .table .select-holder .select-list li,
    .select-holder .select-list li{
        padding: 7px 5px;
    }
    /*----------- User management page styles -----------*/
    .add-form .buttons-holder{
        width: 20%;
        margin: 0;
    }
    .add-form .buttons-holder .btn{
        width: 100%;
    }
    .users-table .btn{
        padding: 6px 10px;
    }
    .users-table th,
    .users-table td{
        width: 33%;
    }
    .users-table th:last-child,
    .users-table td:last-child{
        padding: 15px 5px;
        width: 33%;
    }
    .content-holder .table.users-table td:last-child{
        padding-right: 5px;
    }
    .help{
        font-size:10px;
    }

}
@media only screen and (max-width: 600px){
    .content-holder .table.result-table .text{
        display: block;
        margin: 0 0 5px;
    }
}
</style>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/14b/intl/ru_ALL/common.js" style=""></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/14b/intl/ru_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/29/14b/intl/ru_ALL/stats.js"></script></head>
  <body>
    <div id="app"><div class="find-keywords"><div class="gray-bg"><div class="content-holder"><div class="clearfix"><a class="btn btn-logout">Logout</a> <a href="/user-management" class="btn btn-logout">User Management</a></div> <div class="title-block"><h1><span class="number">2</span>Enter Product or Service</h1></div> <form data-vv-scope="form-1" class="keyword-form claerfix"><div class="buttons-holder"><button type="submit" class="btn">show demand</button> <button type="reset" class="btn reset">reset</button></div> <div class="search-field"><p class="control"><input name="keyword" type="text" placeholder="keyword" class="input" data-vv-id="_we2lvhaiz" aria-required="true" aria-invalid="false"> <span class="help">(for multiple keywords, please separate each keyword with a comma)</span> <span class="help is-danger" style="display: none;"></span></p></div></form></div></div> <div class="content-holder"><div><div class="title-block"><h1><span class="number">3</span>Demand Data</h1> <p>Trend Over The Past 12 Months</p></div> <div class="chart-holder"><div id="chart-1" style="height: 500px; line-height: 500px; width: 100%; text-align: center; color: rgb(153, 153, 153); font-size: 14px; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas width="1494" height="500" style="display: block; width: 1494px; height: 500px;"></canvas></div></div> <ul class="results-list"><li class="title">Locations</li> <li><div class="width1"><p>Kiev,Kyiv city,Ukraine -City</p></div></li></ul></div> <!----> <!----> <div><table class="table result-table"><thead><tr><th class="width1">Your Selected Keywords</th> <th class="width2"><span class="text">Average searches</span> <span class="select-holder"><button type="button" class="select-button">Month</button></span></th></tr></thead> <tbody><tr><td class="width1">tattoo</td> <td class="width2">1,000</td> <!----> <!----></tr><tr><td class="width1">body</td> <td class="width2">390</td> <!----> <!----></tr></tbody></table> <div class="info-holder clearfix"><div class="pagination"><span class="first-page"> | <span class="arrow">‹</span></span> <span><span class="arrow">‹</span></span> <span><span class="arrow">	›</span></span> <span class="last-page"><span class="arrow">	›</span>| </span></div> <div class="info-block"><span>Show rows </span> <span class="select-holder"><button type="button" class="select-button">30</button></span> <span>1 - 30 of 2 keywords</span></div></div></div> <!----> <!----> <div><table class="table result-table"><thead><tr><th class="width1">More Suggested Keywords</th> <th class="width2"><span class="text">Average searches</span> <span class="select-holder"><button type="button" class="select-button">Month</button> </span></th></tr></thead> <tbody><tr><td class="width1">bodys</td> <td class="width2">10</td> <!----> <!----></tr><tr><td class="width1">tattoo designs</td> <td class="width2">50</td> <!----> <!----></tr><tr><td class="width1">tato</td> <td class="width2">40</td> <!----> <!----></tr><tr><td class="width1">bodies</td> <td class="width2">30</td> <!----> <!----></tr><tr><td class="width1">tattoos for men</td> <td class="width2">50</td> <!----> <!----></tr><tr><td class="width1">tattoo shops</td> <td class="width2">50</td> <!----> <!----></tr><tr><td class="width1">tattoo designs for men</td> <td class="width2">10</td> <!----> <!----></tr><tr><td class="width1">tattoos for women</td> <td class="width2">10</td> <!----> <!----></tr><tr><td class="width1">tribal tattoo</td> <td class="width2">50</td> <!----> <!----></tr><tr><td class="width1">sleeve tattoos</td> <td class="width2">40</td> <!----> <!----></tr></tbody></table> <div class="info-holder clearfix"><div class="pagination"><span class="first-page"> | <span class="arrow">‹</span></span> <span><span class="arrow">‹</span></span> <span><span class="arrow">	›</span></span> <span class="last-page"><span class="arrow">	›</span>| </span></div> <div class="info-block"><span>Show rows </span> <span class="select-holder"><button type="button" class="select-button">30</button></span> <span>1 - 30 of 10 keywords</span></div></div></div> <div class="clearfix"><a href="/target-locations" class="btn btn-prev">Back</a></div></div></div></div>
    <script src="/dist/build.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoV5tHJ4v6pQVp0xSx8NdipvhZe3ECEA8&amp;v=3&amp;callback=vueGoogleMapsInit" async="" defer=""></script>
  

</body></html>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();



