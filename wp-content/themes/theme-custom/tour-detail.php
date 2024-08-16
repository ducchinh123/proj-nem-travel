<?php
/*
    Template Name: Tour Detail Page
*/

include 'inc/head.php';
include 'inc/header.php';
?>

<style>
    /* @media screen and (min-width: 768px) {

        .wrapper {
            width: 80%
        }
    } */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .vloader {
        margin: 0;
        font-size: 4px;
        position: relative;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(33, 150, 243, .2);
        border-right: 1.1em solid rgba(33, 150, 243, .2);
        border-bottom: 1.1em solid rgba(33, 150, 243, .2);
        border-left: 1.1em solid #2196f3;
        transform: translateZ(0);
        animation: load8 1.1s infinite linear;
        display: inline-block;
        width: 20px;
        height: 20px;
        vertical-align: bottom
    }

    .vloader,
    .vloader:after {
        border-radius: 50%;
        width: 25px;
        height: 25px
    }

    @-webkit-keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    /* next */
    @media only screen and (min-width:768px) {
        .login-modal .modal-dialog {
            width: 400px
        }
    }

    #login-modal .modal-content {
        border-radius: 0;
        font-family: Helvetica, Arial, sans-serif
    }

    #login-modal .form-control {
        border-radius: 0
    }

    #login-modal .btn-login {
        font-weight: 700
    }

    /* swiper */

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after,
    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: 'next';
        color: #CCC;
        font-size: 35px !important;
    }

    /* .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: 'prev';
        color: #CCC;
    } */

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: #2574A9;
        width: 45px;
        height: 50px;
        border-radius: 70%;
    }


    .swiper-pagination {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 23px;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #CCCC;

        border-radius: 50%;
        opacity: 0.5;
        transition: opacity 0.3s;
    }

    .swiper-pagination-bullet-active {
        background: #747577;
        opacity: 1;
    }



    /* end swiper */

    #login-modal .modal-title {
        font-weight: initial;
        margin: 0;
        line-height: 1.42857143;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #555863
    }

    #login-modal .modal-header {
        padding-left: 15px;
        padding-bottom: 15px
    }

    @media only screen and()
    /* Minification failed. Returning unminified contents.
(1,51219): run-time error CSS1039: Token not allowed after unary operator: '-vh'
(1,115520): run-time error CSS1019: Unexpected token, found '}'
(1,119658): run-time error CSS1019: Unexpected token, found '@-webkit-keyframes'
(1,119683): run-time error CSS1062: Expected semicolon or closing curly-brace, found '0%'
(1,119753): run-time error CSS1019: Unexpected token, found '@keyframes'
(1,119770): run-time error CSS1062: Expected semicolon or closing curly-brace, found '0%'
 */
    .v-ribbon h1,
    .v-ribbon h2,
    .v-ribbon h3,
    .v-ribbon h4,
    .v-ribbon h5,
    .v-ribbon h6,
    .v-ribbon span {
        z-index: 1;
        font-weight: bold;
        font-size: 14px;
        text-align: center;
        position: absolute;
        color: #FFFFFF;
        margin: 0 0px 0px -26px;
        background-color: #E52822;
        top: 15px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12),
        0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .v-ribbon h1:before,
    .v-ribbon h1:after,
    .v-ribbon h2:before,
    .v-ribbon h2:after,
    .v-ribbon h3:before,
    .v-ribbon h3:after,
    .v-ribbon h4:before,
    .v-ribbon h4:after,
    .v-ribbon h5:before,
    .v-ribbon h5:after,
    .v-ribbon h6:before,
    .v-ribbon h6:after,
    .v-ribbon span:before,
    .v-ribbon span:after {
        content: '';
        position: absolute;
        border-style: solid;
        border-color: transparent;
        bottom: -10px
    }

    @media only screen and (min-width: 320px) {

        .v-ribbon h1,
        .v-ribbon h2,
        .v-ribbon h3,
        .v-ribbon h4,
        .v-ribbon h5,
        .v-ribbon h6,
        .v-ribbon span {
            padding: 5px 10px 5px 20px;
            /* margin-bottom:-20px */
        }

        .tourHeaderContainer .padding-mobile {
            height: 250px;
        }

        .swiper-button-next::after,
        .swiper-rtl .swiper-button-prev::after {
            content: "next";
            font-size: 25px;
        }

        .swiper-pagination {
            bottom: 5px;
            font-size: 10px;
            margin-bottom: 50px;

        }

    }


    @media only screen and (min-width: 480px) {

        .v-ribbon h1,
        .v-ribbon h2,
        .v-ribbon h3,
        .v-ribbon h4,
        .v-ribbon h5,
        .v-ribbon h6,
        .v-ribbon span {
            padding: 5px 10px 5px 10px
        }
    }

    .v-ribbon h1:before,
    .v-ribbon h2:before,
    .v-ribbon h3:before,
    .v-ribbon h4:before,
    .v-ribbon h5:before,
    .v-ribbon h6:before,
    .v-ribbon span:before {
        border-width: 0 10px 10px 0;
        border-right-color: #9C0000;
        left: 0
    }

    .vcolor-primary {
        color: #003C71
    }

    .vbackground-primary {
        background-color: #003C71
    }

    .vcolor-success {
        color: #2f7000
    }

    .vbackground-success {
        background-color: #2f7000
    }

    .vcolor-warning {
        color: #F79321
    }

    .vbackground-warning {
        background-color: #F79321
    }

    .vcolor-warning2 {
        color: #FFBD00
    }

    .vbackground-warning2 {
        background-color: #FFBD00
    }

    .vcolor-info {
        color: #26bed6
    }

    .vbackground-info {
        background-color: #26bed6
    }

    .vcolor-blue {
        color: #0f81d7
    }

    .vbackground-blue {
        background-color: #0f81d7
    }

    .vcolor-gray {
        color: #818180
    }

    .vbackground-gray {
        background-color: #818180
    }

    .vcolor-danger {
        color: #D9534F
    }

    .vbackground-danger {
        background-color: #D9534F
    }

    .vcolor-link {
        color: #40A6F2
    }

    .vbackground-link {
        background-color: #40A6F2
    }

    .vcolor-gray-dark {
        color: #4E4E4E
    }

    .vbackground-gray-dark {
        background-color: #4E4E4E
    }

    .vcolor-text-light {
        color: #6c707e
    }

    .vbackground-text-light {
        background-color: #6c707e
    }

    .vcolor-text {
        color: #555863
    }

    .vbackground-text {
        background-color: #555863
    }

    .vcolor-text-dark {
        color: #494b55
    }

    .vbackground-text-dark {
        background-color: #494b55
    }

    .vcolor-white {
        color: #fff !important
    }

    .vbackground-white {
        background-color: #fff !important
    }

    .v-margin-top-0 {
        margin-top: 0px
    }

    .v-margin-left-0 {
        margin-left: 0px
    }

    .v-margin-bottom-0 {
        margin-bottom: 0px
    }

    .v-margin-right-0 {
        margin-right: 0px
    }

    .v-padding-top-0 {
        padding-top: 0px
    }

    .v-padding-left-0 {
        padding-left: 0px
    }

    .v-padding-bottom-0 {
        padding-bottom: 0px
    }

    .v-padding-right-0 {
        padding-right: 0px
    }

    .v-margin-top-3 {
        margin-top: 3px
    }

    .v-margin-left-3 {
        margin-left: 3px
    }

    .v-margin-bottom-3 {
        margin-bottom: 3px
    }

    .v-margin-right-3 {
        margin-right: 3px
    }

    .v-padding-top-3 {
        padding-top: 3px
    }

    .v-padding-left-3 {
        padding-left: 3px
    }

    .v-padding-bottom-3 {
        padding-bottom: 3px
    }

    .v-padding-right-3 {
        padding-right: 3px
    }

    .v-margin-top-5 {
        margin-top: 5px
    }

    .v-margin-left-5 {
        margin-left: 5px
    }

    .v-margin-bottom-5 {
        margin-bottom: 5px
    }

    .v-margin-right-5 {
        margin-right: 5px
    }

    .v-padding-top-5 {
        padding-top: 5px
    }

    .v-padding-left-5 {
        padding-left: 5px
    }

    .v-padding-bottom-5 {
        padding-bottom: 5px
    }

    .v-padding-right-5 {
        padding-right: 5px
    }

    .v-margin-top-8 {
        margin-top: 8px
    }

    .v-margin-left-8 {
        margin-left: 8px
    }

    .v-margin-bottom-8 {
        margin-bottom: 8px
    }

    .v-margin-right-8 {
        margin-right: 8px
    }

    .v-padding-top-8 {
        padding-top: 8px
    }

    .v-padding-left-8 {
        padding-left: 8px
    }

    .v-padding-bottom-8 {
        padding-bottom: 8px
    }

    .v-padding-right-8 {
        padding-right: 8px
    }

    .v-margin-top-10 {
        margin-top: 10px
    }

    .v-margin-left-10 {
        margin-left: 10px
    }

    .v-margin-bottom-10 {
        margin-bottom: 10px
    }

    .v-margin-right-10 {
        margin-right: 10px
    }

    .v-padding-top-10 {
        padding-top: 10px
    }

    .v-padding-left-10 {
        padding-left: 10px
    }

    .v-padding-bottom-10 {
        padding-bottom: 10px
    }

    .v-padding-right-10 {
        padding-right: 10px
    }

    .v-margin-top-15 {
        margin-top: 15px
    }

    .v-margin-left-15 {
        margin-left: 15px
    }

    .v-margin-bottom-15 {
        margin-bottom: 15px
    }

    .v-margin-right-15 {
        margin-right: 15px
    }

    .v-padding-top-15 {
        padding-top: 15px
    }

    .v-padding-left-15 {
        padding-left: 15px
    }

    .v-padding-bottom-15 {
        padding-bottom: 15px
    }

    .v-padding-right-15 {
        padding-right: 15px
    }

    .v-margin-top-20 {
        margin-top: 20px
    }

    .v-margin-left-20 {
        margin-left: 20px
    }

    .v-margin-bottom-20 {
        margin-bottom: 20px
    }

    .v-margin-right-20 {
        margin-right: 20px
    }

    .v-padding-top-20 {
        padding-top: 20px
    }

    .v-padding-left-20 {
        padding-left: 20px
    }

    .v-padding-bottom-20 {
        padding-bottom: 20px
    }

    .v-padding-right-20 {
        padding-right: 20px
    }

    .v-margin-top-25 {
        margin-top: 25px
    }

    .v-margin-left-25 {
        margin-left: 25px
    }

    .v-margin-bottom-25 {
        margin-bottom: 25px
    }

    .v-margin-right-25 {
        margin-right: 25px
    }

    .v-padding-top-25 {
        padding-top: 25px
    }

    .v-padding-left-25 {
        padding-left: 25px
    }

    .v-padding-bottom-25 {
        padding-bottom: 25px
    }

    .v-padding-right-25 {
        padding-right: 25px
    }

    .v-margin-top-30 {
        margin-top: 30px
    }

    .v-margin-left-30 {
        margin-left: 30px
    }

    .v-margin-bottom-30 {
        margin-bottom: 30px
    }

    .v-margin-right-30 {
        margin-right: 30px
    }

    .v-padding-top-30 {
        padding-top: 30px
    }

    .v-padding-left-30 {
        padding-left: 30px
    }

    .v-padding-bottom-30 {
        padding-bottom: 30px
    }

    .v-padding-right-30 {
        padding-right: 30px
    }

    .loading-animate {
        animation: spin .7s infinite linear
    }

    @keyframes spin {
        from {
            transform: scale(1) rotate(0deg)
        }

        to {
            transform: scale(1) rotate(360deg)
        }
    }

    .v-text-300 {
        font-weight: 300
    }

    .v-text-400 {
        font-weight: 400
    }

    .v-text-500 {
        font-weight: 500
    }

    .v-text-600 {
        font-weight: 600
    }

    .v-text-700 {
        font-weight: 700
    }

    .v-max-width {
        width: 100% !important
    }

    .disableSelection,
    .non-selectable {
        user-select: none
    }

    .non-border {
        border-radius: 0px
    }

    .horizontalLineGray {
        background: linear-gradient(to right, #F1F1F2, #F1F1F2);
        height: 1px
    }

    .hide-by-default {
        display: none
    }

    .inline-block-manual {
        display: inline-block;
        width: auto
    }

    .textCurrencySmall {
        font-size: 12px
    }

    a {
        color: #003C71
    }

    a:focus,
    a:hover {
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .v-padding-right-0-xs {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .v-padding-right-0-sm {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 992px) {
        .v-padding-right-0-md {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 1200px) {
        .v-padding-right-0-lg {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 320px) {
        .v-padding-left-0-xs {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .v-padding-left-0-sm {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 992px) {
        .v-padding-left-0-md {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 1200px) {
        .v-padding-left-0-lg {
            padding-left: 0px
        }
    }

    body {
        color: #3f3b3b
    }

    body,
    table.body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    td,
    th,
    a {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif
    }

    .pageTitle {
        color: #003C71;
        margin-top: 0px;
        margin-bottom: 15px;
        font-weight: 500
    }

    @media only screen and (max-width: 767px) {
        .pageTitle {
            font-size: 20px;
            padding-left: 15px;
            padding-right: 15px
        }
    }


    .score-container {
        font-size: 16px
    }

    .score-container .icons.stars {
        color: #F79321;
        top: 0px
    }

    .score-container .score {
        padding: 3px 5px;
        border-radius: 6px;
        background: #9FC43A;
        color: white;
        font-weight: bold
    }

    .score-container .score-description {
        color: #9FC43A;
        font-weight: bold
    }

    .score-container__more {
        line-height: 30px
    }

    .score-container__inner {
        cursor: pointer
    }

    .ribbonContainerOuter {
        position: absolute;
        top: 0px;
        left: 1px;
        width: 100%
    }

    .ribbonContainerOuter .ribbonContainerInner {
        padding: 5px 15px 3px 15px
    }

    .headLine,
    .localHeadLine {
        font-weight: normal;
        padding: 8px 0;
        margin-bottom: 15px;
        border-bottom: 1px solid #DDDDDD;
        font-size: 32px
    }

    .headLine .readMoreTours,
    .localHeadLine .readMoreTours {
        font-size: 12px;
        float: right;
        position: relative;
        top: 17px
    }

    .autoexpand_textarea {
        overflow: hidden;
        padding: 15px;
        -moz-box-sizing: content-box
    }

    .localHeadLine {
        margin-bottom: 0px;
        border-bottom: none;
        color: #003C71
    }

    .localHeadLine a {
        color: #003C71
    }

    .localHeadLine a:hover {
        color: #00529a;
        text-decoration: none
    }

    .localHeadLine.hasLine {
        margin-bottom: 30px;
        margin-top: 5px;
        border-bottom: 2px solid #003C71
    }

    .boxLink a,
    .nav-tabs-custom a {
        transition: all .2s ease-in-out;
        color: #4E4E4E
    }

    .boxLink a:hover,
    .nav-tabs-custom a:hover,
    .boxLink a:focus,
    .nav-tabs-custom a:focus {
        color: #003C71
    }

    .nav-tabs-custom {
        border-radius: 0px
    }

    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #d2d6de
    }

    .nav-tabs-custom .tab-content {
        padding: 15px
    }

    .nav.nav-tabs li a {
        border-radius: 0px
    }

    .box .box-header {
        padding: 10px 15px 10px 15px
    }

    .box .box-body {
        padding: 15px
    }

    .btn {
        font-weight: bold
    }

    .content-header {
        padding: 15px 0px
    }

    @media only screen and (min-width: 320px) {
        .content-header {
            padding: 10px 0px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header {
            padding: 15px 0px
        }
    }

    .content-header ol.breadcrumb {
        margin-top: 0px;
        background: transparent;
        left: 0px;
        word-break: break-word;
        padding: 0px;
        float: none;
        position: initial
    }

    @media only screen and (min-width: 320px) {
        .content-header ol.breadcrumb {
            letter-spacing: -0.5px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header ol.breadcrumb {
            letter-spacing: 0px
        }
    }

    .content-header ol.breadcrumb li {
        line-height: 1.4;
        display: inline
    }

    .content-header ol.breadcrumb li a {
        color: #555863;
        display: inline
    }

    .content-header ol.breadcrumb li a:hover {
        color: #494b55
    }

    @media only screen and (min-width: 320px) {
        .content-header ol.breadcrumb li a {
            font-size: 12px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header ol.breadcrumb li a {
            font-size: 13px
        }
    }

    .content-header ol.breadcrumb>li+li:before {
        content: "/"
    }

    .content-header ol.breadcrumb img {
        display: none
    }

    .content-header ol.breadcrumb li.active a {
        color: #818180
    }

    @media only screen and (min-width: 320px) {

        .content-header ol.breadcrumb li.active,
        .content-header ol.breadcrumb li a {
            margin: 4px 4px
        }
    }

    @media only screen and (min-width: 480px) {

        .content-header ol.breadcrumb li.active,
        .content-header ol.breadcrumb li a {
            margin: 0px 0px
        }
    }

    @media only screen and (min-width: 320px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 768px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 992px) {
        .content-header h1 {
            display: block
        }
    }

    a a {
        color: #26bed6
    }

    a a:focus,
    a a:hover {
        color: #26bed6
    }

    .flex-row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0px -15px
    }

    .flexBoxContainer {
        display: flex;
        flex-wrap: wrap;
        flex: 1
    }

    .input-group-addon .glyphicon.glyphicon-calendar {
        cursor: pointer
    }

    textarea {
        resize: none
    }

    .btn-action {
        transition: all .2s ease-in-out;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24);
        background: #F79321;
        border: 0px solid #F79321;
        color: #fff
    }

    .btn-action:hover {
        background: #FFBD00;
        color: #fff
    }

    .btn-action:focus {
        background: #FFBD00;
        color: #fff
    }

    .btn-action .fa {
        color: #fff !important
    }

    .btn-action--lg {
        padding: 10px 10px
    }

    .btn-action--flat {
        border-radius: 0px
    }

    .btn-main {
        transition: all .2s ease-in-out;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24);
        background: #003C71;
        border: 0px solid #003C71;
        color: #fff
    }

    .btn-main:hover {
        background: #0057a4;
        color: #fff
    }

    .btn-main:focus {
        background: #0057a4;
        color: #fff
    }

    .btn-main .fa {
        color: #fff !important
    }

    .btn-rounded {
        border-radius: 100px
    }

    .flex {
        display: flex
    }

    .flex--equal-h {
        flex: 1 0 auto
    }

    .pagination li a:hover,
    .pagination li a:focus {
        border: 1px solid rgba(15, 129, 215, 0.4);
        background: #fafafa
    }

    .pagination li.active a {
        border: 1px solid rgba(15, 129, 215, 0.4);
        color: #0f81d7;
        background: rgba(15, 129, 215, 0.1)
    }

    .pagination li.active a:hover,
    .pagination li.active a:focus {
        color: #0f81d7;
        background: rgba(15, 129, 215, 0.1)
    }

    select.form-control {
        border-radius: 0px;
        -webkit-appearance: none;
        padding-top: 0px;
        padding-bottom: 0px
    }

    .form-control {
        border-radius: 0px
    }

    .selectIcon {
        color: rgba(85, 88, 99, 0.7)
    }

    .main-header.ivivu-main-header {
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        z-index: 10
    }

    .main-header.ivivu-main-header h1,
    .main-header.ivivu-main-header h2,
    .main-header.ivivu-main-header h3,
    .main-header.ivivu-main-header h4,
    .main-header.ivivu-main-header h5,
    .main-header.ivivu-main-header h6,
    .main-header.ivivu-main-header p,
    .main-header.ivivu-main-header td,
    .main-header.ivivu-main-header th,
    .main-header.ivivu-main-header a {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif
    }

    .main-header.ivivu-main-header .navbar {
        margin-left: 0px;
        border: 0px solid transparent;
        background-color: #003C71
    }

    .main-header.ivivu-main-header .navbar .nav>li>a {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .nav>li>a:hover,
    .main-header.ivivu-main-header .navbar .nav>li>a:active,
    .main-header.ivivu-main-header .navbar .nav>li>a:focus,
    .main-header.ivivu-main-header .navbar .nav .open>a,
    .main-header.ivivu-main-header .navbar .nav .open>a:hover,
    .main-header.ivivu-main-header .navbar .nav .open>a:focus,
    .main-header.ivivu-main-header .navbar .nav>.active>a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle:hover {
        color: #26bed6;
        background: none
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand {
        padding-top: 5px;
        padding-bottom: 0px
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
        height: auto
    }

    @media only screen and (max-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 50px;
            position: absolute;
            left: 0;
            top: 10px
        }
    }

    @media only screen and (min-width: 321px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 65px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 100%
        }
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 18px
        }
    }

    @media only screen and (min-width: 480px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            border-top: 2px solid transparent;
            border-bottom: 2px solid transparent
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 16px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a {
        transition: all .1s ease-in-out;
        letter-spacing: -0.2px
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a:hover {
        color: #26bed6;
        background: none
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 10px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 10px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li:last-child>a {
        padding-right: 0
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active {
        border-bottom: 2px solid #FFBD00
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active a {
        background: none
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar ul.nav>li.active {
            border-bottom-width: 0px
        }

        .main-header.ivivu-main-header .navbar ul.nav>li.active a {
            color: #26bed6
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu {
        background: #003C71;
        border: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
        transition: all .2s ease-in-out;
        color: white
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a:hover {
        background: none;
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 18px;
            padding: 10px 15px
        }
    }

    @media only screen and (min-width: 480px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px;
            padding: 8px 15px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.active a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.divider {
        background-color: rgba(255, 255, 255, 0.1)
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu {
        padding: 8px 0;
        background: white !important;
        min-width: 246px;
        margin: 5px -15px 0 0;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        border-radius: 0px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::before,
    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::after {
        border-bottom-color: rgba(0, 0, 0, 0.25);
        border-width: 7px;
        margin-left: -7px;
        bottom: 100%;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::before {
        border-bottom-color: rgba(0, 0, 0, 0.25);
        border-width: 7px;
        margin-left: -7px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::after {
        border-bottom-color: #ffffff;
        border-width: 6px;
        margin-left: -6px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a {
        font-size: 15px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: black;
        font-size: 14px;
        letter-spacing: normal
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a:hover {
        background: none;
        color: #26BED6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a.point-menu-padding {
        padding-left: 0px;
        padding-right: 0px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header {
        padding: 10px 15px;
        display: flex
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar {
        padding-right: 15px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar img {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(78, 78, 78, 0.4);
        width: 43px;
        height: 43px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.name {
        font-size: 18px;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.description {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.9)
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 170px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 220px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .point-text {
        padding-left: 0;
        padding-top: 4px;
        text-align: right;
        align-self: center;
        color: #003c71;
        font-size: 12px;
        font-weight: bold
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap {
        padding: 12px 16px 5px 16px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn {
        transition: all .5s;
        height: 40px;
        border-radius: 4px;
        color: black;
        border: solid 1px #bdbdbd;
        background-color: white
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn:hover {
        border: solid 1px #003C71;
        color: #003C71
    }

    .main-header.ivivu-main-header .navbar .navbar-collapse {
        box-shadow: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper img {
        width: 39px;
        height: 39px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(78, 78, 78, 0.4)
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: block;
            position: absolute;
            right: 5px;
            bottom: 5px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: inline-block;
            position: absolute;
            left: -30px;
            bottom: 10px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu {
            right: 70px
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login a i.fa {
            text-shadow: 0 0 2px rgba(0, 19, 37, 0.5)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.logged-in a i.fa {
            color: #26bed6
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.open a.dropdown-toggle {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login ul.dropdown-menu {
            background: #004a8b;
            background: linear-gradient(to bottom, #004a8b, #003C71);
            right: 0%
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login {
        color: white;
        background: #F79321;
        border: none;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login:hover {
        background: #FFBD00
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 0px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 20px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 35px
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item.active {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
        display: flex;
        justify-content: center;
        flex-direction: column
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-item {
        color: white;
        display: block
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
        color: #F79321;
        text-decoration: none;
        letter-spacing: -1px;
        font-weight: bold;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link .fa {
        position: relative;
        top: 1px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
        color: #FFBD00
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-description,
    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        color: white;
        font-size: 12px;
        margin: 0px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown {
        user-select: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
        width: 250px;
        background: white;
        padding: 0px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item {
        font-size: 16px;
        padding: 12px 15px;
        color: #6c707e;
        cursor: pointer
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item:hover {
        background: rgba(148, 151, 163, 0.05)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu li:not(:last-child) .hotline-dd-item {
        border-bottom: 1px solid rgba(148, 151, 163, 0.25)
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
            top: 3px;
            position: absolute;
            left: -35px
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        cursor: pointer;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location:hover {
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 50px;
            padding-right: 5px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: -1.5px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            position: relative;
            right: 15px;
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 51px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            letter-spacing: -1px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px;
            padding-left: 25px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: -1px;
            text-decoration: none
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
            color: #FFBD00
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px
        }
    }

    @media only screen and (-ms-high-contrast: none) and (min-width: 992px),
    only screen and (-ms-high-contrast: active) and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 80px
        }
    }

    .header-search-form {
        border-radius: 0 0 4px 4px;
        background: #003C71;
        padding: 15px 0px
    }

    .header-search-form__outer {
        position: absolute;
        left: 0px;
        padding: 0px
    }

    .header-search-form__outer .container {
        padding: 0px
    }

    @media only screen and (min-width: 1200px) {
        .header-search-form__outer {
            top: 64px
        }
    }

    .header-search-form .form-group label {
        color: white
    }

    @media only screen and (min-width: 768px) {
        .header-search-form .form-group {
            margin-bottom: 0px
        }
    }

    .header-search-form .btn-action {
        border: 1px solid #F79321
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .header-search-form {
            background: linear-gradient(to bottom, #004a8b, #003C71)
        }

        .header-search-form__outer {
            top: 50px
        }

        .header-search-form .date-div .form-group {
            margin-bottom: 0px
        }

        .header-search-form .date-div.check-in {
            padding-right: 8px
        }

        .header-search-form .date-div.check-out {
            padding-left: 8px
        }

        .header-search-form .action-div .form-group {
            margin-bottom: 0px
        }
    }

    .close-modal-button {
        width: 100%;
        margin-top: -22px;
        position: fixed;
        color: white;
        text-align: right;
        margin-left: 15px;
        cursor: pointer
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        cursor: default
    }

    .form-control[disabled].input-white,
    .form-control[readonly].input-white,
    fieldset[disabled] .form-control.input-white {
        background-color: white;
        opacity: 1
    }

    @media only screen and (min-width: 320px) {
        .cardItem {
            padding: 0px 0px 30px 0px
        }
    }

    @media only screen and (min-width: 480px) {
        .cardItem {
            padding: 0px 0px 30px 0px
        }
    }

    .cardItem .cardItemContainer {
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.1);
        border: solid 1px #dedfe3;
        margin: 0px;
        padding: 0px;
        font-size: 13px
    }

    .cardItem .cardItemContainer:hover {
        box-shadow: 0 0 16px 0 rgba(38, 190, 214, 0.8);
        border: solid 1px #26bed6
    }

    .cardItem .cardItemContainer:hover .cardItemContent {
        border: 1px solid rgba(64, 166, 242, 0.2)
    }

    .cardItem .cardItemContainer .v-ribbon .normalContent {
        font-weight: normal
    }

    .cardItem .cardItemContainer .cardItemImage figure {
        display: block;
        position: relative;
        overflow: hidden
    }

    .cardItem .cardItemContainer .cardItemImage figure img {
        object-fit: cover;
        max-width: 100%;
        min-height: 224px;
        -moz-transition: .5s ease-in-out;
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out
    }

    @media only screen and (min-width: 320px) {
        .cardItem .cardItemContainer .cardItemImage figure img {
            width: 100%
        }
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemImage figure img {
            min-height: 180px
        }
    }

    .cardItem .cardItemContainer .cardItemContent {
        transition: all .2s ease-in-out;
        color: #4E4E4E;
        padding: 10px 0px;
        background-color: white;
        border: 1px solid #e4e4e6
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemTourNameDiv .cardItemTourName {
        color: #003C71;
        font-size: 16px;
        font-weight: bold
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv {
        min-height: 54px
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv {
            min-height: initial
        }
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv .tourListPros {
        color: #26bed6;
        margin-bottom: 0px
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv .tourListPros li:before {
        content: "\2022  "
    }

    .cardItem .cardItemContainer .cardItemContent .note {
        font-style: italic
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice {
        position: relative
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price {
        font-size: 22px;
        font-weight: bold;
        float: right
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price .textCurrency {
        font-size: 13px;
        font-weight: initial
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .tourBooking24H {
        float: left;
        color: #e52822;
        background-color: #fceaea;
        padding: 2px 5px 3px;
        margin-top: 3px;
        border-radius: 2px
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemPrice .tourBooking24H {
            float: right
        }
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price-line {
        position: absolute;
        right: 15px;
        top: -20px;
        font-weight: 400;
        color: #828282;
        font-size: 15px;
        text-decoration: line-through
    }

    @media only screen and (max-width: 375px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price-line {
            position: relative;
            right: auto;
            top: auto;
            float: right;
            margin-top: 7px;
            margin-right: 10px
        }
    }

    .cardItem .cardItemContainer .cardItemContent i.fa {
        margin: 5px
    }

    .cardItem .cardItemContainer .cardItemLocation {
        position: absolute;
        right: 0px;
        top: 11px;
        color: white;
        font-size: 12px;
        font-weight: normal;
        -webkit-text-shadow: 1px 1px 4px black;
        -moz-text-shadow: 1px 1px 4px black;
        text-shadow: 1px 1px 4px black;
        text-align: right;
        width: 100%;
        background: rgba(0, 0, 0, 0.1);
        padding: 6px 15px
    }

    @media only screen and (min-width: 320px) {
        .cardItem .cardItemContainer .cardItemLocation {
            padding: 9px 15px
        }
    }

    @media only screen and (min-width: 480px) {
        .cardItem .cardItemContainer .cardItemLocation {
            padding: 6px 15px
        }
    }

    .cardItem .cardItemContainer .cardItemTitle {
        transition: all .7s ease-in-out;
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        top: 0px;
        width: 100%;
        font-size: 16px;
        padding-top: 10px;
        padding-bottom: 2px;
        background: rgba(0, 70, 126, 0.7);
        z-index: 1;
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.6)
    }

    .content-wrapper {
        background-color: #ecf0f5;
    }

    .cardItem .cardItemContainer .cardItemTitle p {
        margin: 0px;
        font-weight: normal;
        color: white
    }

    .cardItem .cardItemContainer .cardItemButton {
        font-size: 13px;
        padding: 6px 20px
    }

    .cardItem .cardItemContainer .ribbonDiv {
        position: relative;
        left: 1px;
        top: -50px
    }

    .cardItem .cardItemContainer .ribbonDiv h1 {
        font-weight: normal;
        font-size: 14px
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter {
        transition: all .7s ease-in-out;
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        background: rgba(0, 70, 126, 0.8);
        position: absolute;
        bottom: 0px;
        left: 0px
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner {
        padding: 5px 15px 3px 15px;
        font-size: 14px;
        color: #4E4E4E;
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.6)
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceAfterDiscount {
        color: white;
        font-size: 14px;
        font-weight: bold
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceAfterDiscount i.glyphicon.glyphicon-map-marker {
        color: #F79321
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceBeforeDiscount {
        text-decoration: line-through;
        color: white;
        font-weight: normal
    }

    .btn.btn-flat {
        border-radius: 0
    }

    .panel-group a {
        color: #40A6F2
    }

    .panel-group a:focus,
    .panel-group a:hover {
        color: #26bed6
    }

    .panel-group .panel {
        border-radius: 0px
    }

    .panel-group .panel+.panel {
        margin-top: 15px
    }

    .panel-group .panel .panel-heading {
        border-radius: 0px
    }

    .panel-group .panel .panel-heading .panel-title {
        font-size: 18px
    }

    .panel-group .panel .panel-heading .panel-title a {
        color: #4E4E4E
    }

    .panel-group .panel .panel-heading .panel-title a:focus,
    .panel-group .panel .panel-heading .panel-title a:hover {
        color: #4E4E4E
    }

    .panel-group .panel .panel-body .row>div {
        padding: 5px 15px
    }

    .icon-bus:before {
        content: ""
    }

    .icon-plane:before {
        content: ""
    }

    .icon-boat:before {
        content: ""
    }

    .icon-train:before {
        content: ""
    }

    .icon-ticket2:before {
        content: ""
    }

    .icon-flag2:before {
        content: ""
    }

    .icon-checkmark3:before {
        content: ""
    }

    .icon-breakfast:before {
        content: ""
    }

    body,
    table.body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    td,
    th,
    a {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 400
    }

    .form-group {
        color: #555863
    }

    .form-group label {
        font-weight: 500
    }

    .v-modal.primary .modal-content .modal-header {
        background: #003C71
    }

    .v-modal.primary .modal-content .modal-header .close {
        color: white;
        opacity: 0.3;
        width: 15px
    }

    .v-modal.primary .modal-content .modal-header .close .fa {
        position: relative;
        top: 2px
    }

    .v-modal.primary .modal-content .modal-header .modal-title {
        color: white
    }

    .v-modal .modal-content {
        color: #555863
    }

    .v-modal .modal-content .control-label {
        font-weight: 500
    }



    @media only screen and (min-width: 320px) {
        .v-modal .modal-content .modal-footer button {
            padding: 12px;
            font-size: 16px
        }
    }

    @media only screen and (min-width: 480px) {
        .v-modal .modal-content .modal-footer button {
            padding: 8px;
            font-size: 14px
        }
    }

    .daterangepicker {
        user-select: none;
        border-radius: 4px;
        margin-top: 15px;
        background: transparent;
        width: auto !important;
        border: 0px solid transparent;
        padding: 0px
    }

    .daterangepicker.show-calendar {
        padding: 0px
    }

    .daterangepicker:after {
        border-bottom-color: #EBEBEB;
        border-width: 9px;
        top: -7px
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker:after {
            display: none !important
        }
    }

    .daterangepicker:before {
        border-bottom-color: transparent;
        border-width: 10px;
        top: -4px
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker:before {
            display: none !important
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensleft:before {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensleft:after {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .ranges {
            display: none !important
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensright:before {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensright:after {
            display: none
        }
    }

    .daterangepicker .calendar {
        max-width: none !important;
        width: auto
    }

    @media only screen and (min-width: 320px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 6px 8px
        }
    }

    @media only screen and (min-width: 375px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 6px 8px
        }
    }

    @media only screen and (min-width: 414px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 10px 14px
        }
    }

    @media only screen and (min-width: 484px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 8px 10px
        }
    }

    .daterangepicker .calendar th td.line-through-cell,
    .daterangepicker .calendar tr td.line-through-cell {
        text-decoration: line-through
    }

    .daterangepicker .calendar.single {
        width: auto !important;
        margin: 0px;
        background: #EBEBEB;
        padding: 10px;
        border-radius: 4px
    }

    @media only screen and (min-width: 320px) {
        .daterangepicker .calendar.single {
            padding: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .daterangepicker .calendar.single {
            padding: 10px
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .calendar-table {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100%
        }

        .daterangepicker .calendar-table .calendar-header-mb {
            display: flex;
            height: auto
        }

        .daterangepicker .calendar-table .calendar-header-mb .drag-handle {
            width: 100px;
            height: 6px;
            border-radius: 8px;
            background-color: #e9eaec;
            margin: 10px auto;
            display: block
        }
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th {
        color: #494b55;
        font-weight: bold
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th:first-child {
        color: #494b55
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th:nth-last-child(1),
    .daterangepicker .calendar-table table thead tr:nth-child(2) th:nth-last-child(2) {
        color: #D9534F
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker select .monthselect {
            border-radius: 4px
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker select .yearselect {
            border-radius: 4px
        }
    }

    .daterangepicker td.disabled,
    .daterangepicker option.disabled {
        text-decoration: inherit;
        cursor: default
    }

    .daterangepicker td {
        color: #494b55;
        border: 2px solid transparent;
        transition: all .1s ease-in-out
    }

    .daterangepicker td.off.disabled {
        color: rgba(108, 112, 126, 0.35) !important;
        text-decoration: none;
        pointer-events: none
    }

    .daterangepicker td.off.available {
        color: rgba(108, 112, 126, 0.85)
    }

    .daterangepicker td:nth-last-child(1).weekend,
    .daterangepicker td:nth-last-child(2).weekend {
        color: #D9534F
    }

    .daterangepicker td:nth-last-child(1).weekend.off,
    .daterangepicker td:nth-last-child(2).weekend.off {
        color: rgba(217, 83, 79, 0.6)
    }

    .daterangepicker td.in-range {
        color: #0d73bf;
        background-color: rgba(64, 166, 242, 0.1)
    }

    .daterangepicker td.in-range.available {
        color: #0d73bf
    }

    .daterangepicker td.active {
        background-color: #0082bb !important
    }

    .daterangepicker td.active.start-date.end-date.available,
    .daterangepicker td.start-date,
    .daterangepicker td.end-date {
        border-radius: 0px
    }

    .daterangepicker td.active.start-date {
        border-radius: unset
    }

    .daterangepicker td.active.end-date {
        border-radius: unset
    }

    .daterangepicker td.available:not(.start-date):not(.end-date):hover {
        border-radius: 0px;
        color: #003C71;
        background-color: rgba(0, 60, 113, 0.1)
    }

    .daterangepicker td.start-date,
    .daterangepicker td.end-date {
        color: white !important;
        background-color: #003C71
    }

    .daterangepicker td.start-date:hover,
    .daterangepicker td.end-date:hover {
        background-color: #00213e
    }

    @media only screen and (min-width: 768px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 690px
        }
    }

    @media only screen and (min-width: 998px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 910px
        }
    }

    @media only screen and (min-width: 1200px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 730px
        }
    }

    .typeahead-container .emptyData {
        padding: 15px;
        text-align: center
    }

    .typeahead-container .dataTitle {
        padding: 15px 15px 5px 15px;
        margin: 0px;
        font-weight: bold;
        border-top: 1px solid #ddd;
        color: #003C71
    }

    .typeahead-container .dataTitle .fa {
        color: #003C71
    }

    .typeahead-container .twitter-typeahead {
        width: 100%
    }

    .typeahead-container .twitter-typeahead input {
        color: #494b55
    }

    .typeahead-container .tt-hint {
        color: #6c707e
    }

    .typeahead-container .tt-menu {
        width: 100%;
        margin-top: 1px;
        color: #494b55;
        border-radius: 4px;
        background: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .typeahead-container .tt-menu .tt-dataset {
        background: white;
        border-radius: 4px;
        position: relative;
        width: 100%
    }

    .typeahead-container .tt-menu .tt-dataset-popularLocation {
        padding-bottom: 10px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion {
        padding: 15px 15px;
        border-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion .tourCount {
        margin-left: 5px;
        font-size: 12px;
        color: #003C71
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion mark {
        padding: 0px;
        color: #494b55;
        font-weight: normal;
        background-color: transparent
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable {
        cursor: pointer;
        background: white
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:hover {
        background: rgba(73, 75, 85, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable.tt-cursor {
        background: rgba(73, 75, 85, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .search-header {
        padding: 15px 15px 0px 15px
    }

    .typeahead-container .search-header__inner {
        border-bottom: 1px solid rgba(108, 112, 126, 0.15)
    }

    .typeahead-container .search-header .title {
        font-size: 16px;
        font-weight: bold
    }

    .typeahead-container .search-result__icon {
        font-size: 18px;
        margin-right: 10px
    }

    .typeahead-container .search-result__description {
        color: #6c707e
    }

    .typeahead-container .search-result.suggestion .media .media-left picture img {
        width: 60px;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .search-result.suggestion .media .media-body .media-heading {
        font-size: 16px;
        color: #494b55
    }

    @media only screen and (max-width: 479px) {
        .tour-list-search-container {
            padding: 0px
        }
    }

    .search-wrapper .tour-list-search-container .search-form .back-home {
        display: none;
        position: absolute;
        top: -40px;
        left: 15px;
        z-index: 11
    }

    @media only screen and (max-width: 767px) {
        .search-wrapper .tour-list-search-container .search-form {
            padding: 0
        }

        .search-wrapper .tour-list-search-container .search-form .back-home {
            display: block
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief {
            position: absolute;
            z-index: 10;
            top: -56px;
            left: 0;
            width: 100%;
            background-color: #003c71;
            color: #fff;
            height: 60px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header {
            border: none;
            padding: 10px 15px 0
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title {
            color: #fff;
            font-size: 18px;
            text-align: center
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title .ico-ic_location {
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title .tourDepartLocation {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            padding: 0 18px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body {
            border: none;
            padding: 0px 15px 4px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div {
            display: block !important;
            text-align: center
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div {
            display: inline-block
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div.v-margin-right-15 {
            margin-right: 0
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .dateCheckinStr {
            font-weight: 400
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .icon-dot {
            display: inline-block;
            padding: 0 8px 0 5px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .ico-ic_date,
        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .ico-ic_departure {
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .main-search-form {
            padding: 0 15px 15px;
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .main-search-form.show {
            display: block
        }
    }

    .search-brief {
        color: #494b55;
        background: white;
        border-radius: 4px;
        font-size: 14px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all .2s ease-in-out;
        animation-duration: 0.2s !important;
        animation-delay: 0s
    }

    .search-brief__header {
        padding: 10px 15px;
        border-bottom: 1px solid rgba(108, 112, 126, 0.15)
    }

    .search-brief__header--title {
        font-size: 17px;
        font-weight: bold;
        margin: 0px;
        color: #003C71
    }

    .search-brief__body {
        padding: 10px 15px
    }

    .search-brief .icon {
        color: rgba(108, 112, 126, 0.8);
        font-size: 16px;
        margin-right: 5px
    }

    @media only screen and (max-width: 479px) {
        .search-brief {
            display: block
        }
    }

    @media only screen and (min-width: 480px) {
        .search-brief {
            display: none
        }
    }

    .search-form {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 4px
    }

    .search-form.home-page {
        background: rgba(0, 0, 0, 0.3)
    }

    @media only screen and (min-width: 768px) {
        .search-form .no-padding-r {
            padding-right: 0
        }
    }

    .search-form .no-padding-r.typeahead-container {
        padding-right: 0
    }

    @media only screen and (max-width: 991px) {
        .search-form .no-padding-r.typeahead-container {
            padding-right: 15px
        }
    }

    .search-form .input-icon {
        position: absolute;
        color: rgba(108, 112, 126, 0.8);
        margin-left: 16px;
        margin-right: 4px;
        font-size: 18px
    }

    @media only screen and (min-width: 320px) {
        .search-form.tour-list {
            border-radius: 0
        }

        .search-form.tour-list .typeahead-container {
            margin-bottom: 15px;
            padding-right: 15px
        }
    }

    @media only screen and (min-width: 998px) {
        .search-form.tour-list {
            margin-top: 0px;
            border-radius: 0 0 4px 4px
        }

        .search-form.tour-list .typeahead-container {
            margin-bottom: 0px;
            padding-right: 0px
        }
    }

    .search-form .main-search-form {
        transition: all .2s ease-in-out;
        animation-duration: 0.15s !important;
        animation-delay: 0s
    }

    @media only screen and (max-width: 479px) {
        .search-form .main-search-form {
            display: none
        }
    }

    .search-form .header {
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .search-form .header__title {
        color: #6c707e;
        font-size: 17px
    }

    .search-form .header__close {
        display: inline-block;
        padding: 4px 20px;
        background: rgba(73, 75, 85, 0.5);
        color: white;
        border-radius: 50px;
        cursor: pointer;
        font-size: 17px;
        transition: all .2s ease-in-out
    }

    .search-form .header__close:hover,
    .search-form .header__close:focus {
        background: rgba(73, 75, 85, 0.15)
    }

    @media only screen and (min-width: 480px) {
        .search-form .header {
            display: none
        }
    }

    .search-form .form-control {
        box-shadow: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        color: #494b55
    }

    .search-form .form-control:read-only {
        box-shadow: none;
        background-color: white;
        cursor: default
    }

    .search-form .form-control.search-input {
        font-size: 16px;
        height: 60px;
        padding: 0px 15px;
        padding-left: 50px
    }

    .search-form .dates .nights {
        color: #6c707e;
        position: absolute;
        background: white;
        display: inline-block;
        font-size: 14px;
        letter-spacing: -1px;
        min-width: 40px;
        left: -20px;
        text-align: center
    }

    .search-form .dates .nights .vicon {
        margin-left: 2px;
        color: rgba(108, 112, 126, 0.8)
    }

    .search-form .dates .check-in .v_field {
        border-right: 1px solid rgba(108, 112, 126, 0.15);
        border-radius: 4px 0px 0px 4px;
        padding-right: 0px
    }

    .search-form .dates .check-out .v_field {
        border-radius: 0px 4px 4px 0px;
        padding-right: 0px;
        padding-left: 30px
    }

    @media only screen and (min-width: 768px) {
        .search-form .rooms {
            padding: 0px
        }
    }

    .search-form .v_field {
        height: 60px;
        display: flex;
        align-items: center;
        vertical-align: middle;
        border-radius: 4px;
        cursor: pointer;
        background: white;
        transition: all 0.3s linear;
        user-select: none;
        color: #494b55;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .search-form .v_field__icon-container .icon {
        color: rgba(108, 112, 126, 0.8)
    }

    @media only screen and (min-width: 320px) {
        .search-form .v_field__icon-container .icon {
            font-size: 16px;
            margin-right: 10px
        }
    }

    @media only screen and (min-width: 480px) {
        .search-form .v_field__icon-container .icon {
            font-size: 20px;
            margin-right: 15px
        }
    }

    .search-form .v_field__text,
    .search-form .v_field__description {
        margin-bottom: 0px
    }

    .search-form .v_field__description {
        color: #6c707e
    }

    .search-form .v_field__description {
        color: #6c707e
    }

    .search-form .v_field__input {
        border: 0px;
        background: none;
        border: none;
        box-shadow: none;
        padding: 0px
    }

    .search-form .v_field__input:focus {
        outline: none
    }

    .search-form .v_field__content {
        font-size: 16px
    }

    @media only screen and (max-width: 320px) {
        .search-form .v_field__content {
            font-size: 14px;
            letter-spacing: -0.3px
        }
    }

    .search-form .search-form-button {
        height: 60px;
        border-radius: 4px;
        font-size: 16px
    }

    .search-form .departure-popover {
        background: white;
        border-radius: 4px;
        z-index: 5
    }

    @media only screen and (min-width: 320px) {
        .search-form .departure-popover {
            padding: 0px;
            margin-top: 1px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form .departure-popover {
            margin-top: 1px;
            position: absolute;
            padding: 0px;
            top: 60px
        }
    }

    .search-form .departure-popover__inner {
        border-radius: 4px;
        padding: 5px;
        background: white;
        box-shadow: 0px 10px 16px 10px rgba(0, 0, 0, 0.2)
    }

    .search-form .departure-popover__item {
        padding: 8px 50px;
        color: #6c707e;
        border-radius: 4px;
        cursor: pointer
    }

    .search-form .departure-popover__item .media-heading {
        margin: 5px 0
    }

    .search-form .departure-popover__item:hover {
        background: rgba(108, 112, 126, 0.1);
        box-shadow: 1px 2px 5px 2px rgba(0, 0, 0, 0.2)
    }

    .search-form .departure-popover__item .fa.fa-check {
        display: none
    }

    .search-form .departure-popover__item.selected {
        position: relative;
        background: rgba(108, 112, 126, 0.1)
    }

    .search-form .departure-popover__item.selected .fa.fa-check {
        display: block;
        position: absolute;
        display: inline-block;
        top: 4px;
        right: -5px;
        font-size: 20px
    }

    .search-form .room-popover {
        background: #EBEBEB;
        border-radius: 4px;
        z-index: 3
    }

    @media only screen and (min-width: 320px) {
        .search-form .room-popover {
            padding: 0px;
            margin-top: 1px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form .room-popover {
            margin-top: 0px;
            position: absolute;
            top: 74px;
            padding: 10px
        }

        .search-form .room-popover:after,
        .search-form .room-popover:before {
            bottom: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .search-form .room-popover:after {
            border-color: rgba(255, 255, 255, 0);
            border-bottom-color: #EBEBEB;
            border-width: 9px;
            left: 50%;
            margin-left: -9px
        }

        .search-form .room-popover:before {
            border-color: rgba(113, 158, 206, 0);
            border-bottom-color: transparent;
            border-width: 10px;
            left: 50%;
            margin-left: -10px
        }
    }

    .search-form .room-popover__inner {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        background: white;
        padding: 0px
    }

    .search-form .room-popover__item {
        padding: 10px;
        color: #6c707e
    }

    .search-form .room-popover__item.child-age-selection {
        padding: 15px 5px 5px 5px
    }

    .search-form .room-popover .room-popover__item~.room-popover__item {
        border-top: 1px solid rgba(108, 112, 126, 0.15)
    }

    .search-form .room-popover__quantity {
        display: flex;
        vertical-align: middle;
        align-items: center
    }

    .search-form .room-popover__quantity .quantity {
        min-width: 26px;
        text-align: center;
        display: inline-block;
        margin-right: 15px;
        font-size: 21px;
        color: #494b55
    }

    .search-form .room-popover .btn-group .btn {
        color: #6c707e
    }

    .search-form .room-popover .child-ages {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
        -moz-font-feature-settings: "liga" on
    }

    .search-form .room-popover .child-ages__item {
        display: flex;
        padding: 5px
    }

    @media only screen and (min-width: 320px) {
        .search-form .room-popover .child-ages__item {
            width: calc(100% / 3)
        }
    }

    .search-form .room-popover .child-ages .select-child {
        width: 100%
    }

    .search-form .room-popover .child-ages .select-child:after {
        font-family: FontAwesome;
        content: "\f107";
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        position: absolute;
        right: 20px;
        top: 10px;
        z-index: 1;
        text-align: center;
        width: 10%;
        height: auto;
        pointer-events: none
    }

    .search-form .room-popover .child-ages .select-child select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        border-radius: 4px;
        height: 40px;
        z-index: 1
    }

    .search-form .room-popover .child-ages .select-child select.form-control+.select-icon {
        position: absolute;
        right: 16px;
        top: 13px
    }

    @media only screen and (min-width: 320px) {
        .search-form {
            padding: 10px 15px;
            margin-bottom: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form {
            padding: 15px;
            margin-bottom: 15px
        }
    }

    @media only screen and (max-width: 767px) {

        .search-form .dates,
        .search-form .rooms {
            margin-bottom: 15px
        }

        .search-form .departure-popover {
            border: none;
            height: calc(100% - 180px);
            transition: 1s;
            position: fixed;
            bottom: 0px;
            left: 0px;
            overflow-y: scroll;
            background: white;
            border-radius: 0px;
            z-index: 99;
            margin: 0px
        }

        .search-form .departure-popover .departure-header-mb {
            position: fixed;
            width: 100%;
            height: 90px;
            background: #fff;
            z-index: 100;
            margin-left: -16px;
            flex-direction: column;
            top: 180px
        }

        .search-form .departure-popover .departure-header-mb .drag-handle {
            width: 100px;
            height: 6px;
            border-radius: 8px;
            background-color: #e9eaec;
            margin: 12px auto 21px auto
        }

        .search-form .departure-popover .departure-header-mb .departure-title-mb {
            text-align: left;
            font-family: Helvetica;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b;
            margin-left: 16px
        }

        .search-form .departure-popover__inner {
            border-radius: 0px;
            padding: 0px 16px 0px 16px;
            background: white;
            box-shadow: none
        }

        .search-form .departure-popover__item {
            text-align: left;
            font-family: Helvetica;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b;
            padding: 15px 0px 15px 0px
        }

        .search-form .departure-popover__item~.departure-popover__item {
            border-top: 1px solid #f2f2f2
        }

        .search-form .tour-list .popup-searchcontent-mb {
            border-radius: unset;
            box-shadow: none;
            border: none;
            height: 100vh;
            height: calc(var(--vh, 1vh) * 100);
            transition: 1s;
            overflow: hidden
        }
    }

    .invisible-date-container,
    .departure-container {
        position: absolute;
        top: 0px
    }

    .invisible-date-container .invisible-date-picker,
    .invisible-date-container .departure-location,
    .departure-container .invisible-date-picker,
    .departure-container .departure-location {
        height: 60px;
        width: 100%;
        color: transparent;
        cursor: pointer
    }

    @media only screen and (min-width: 320px) {
        section.content {
            margin-left: -15px;
            margin-right: -15px
        }
    }

    @media only screen and (min-width: 480px) {
        section.content {
            margin-left: 0px;
            margin-right: 0px
        }
    }

    .bs-callout {
        padding: 15px;
        margin: 0px;
        border: 0px solid #EBEBEB;
        border-left-width: 2px;
        color: #555863
    }

    .bs-callout.no-border {
        border-left-width: 0px
    }

    .bs-callout+.bs-callout {
        margin-top: -5px
    }

    .bs-callout h1,
    .bs-callout h2,
    .bs-callout h3,
    .bs-callout h4 {
        margin-top: 0;
        margin-bottom: 15px
    }

    .bs-callout p:last-child {
        margin-bottom: 0
    }

    .bs-callout code {
        border-radius: 3px
    }

    .bs-callout-default {
        background-color: rgba(119, 119, 119, 0.1);
        border-color: rgba(119, 119, 119, 0.07);
        border-left-color: #777
    }

    .bs-callout-default h1,
    .bs-callout-default h2,
    .bs-callout-default h3,
    .bs-callout-default h4,
    .bs-callout-default h5 {
        color: #777
    }

    .bs-callout-default.border-fade {
        border: 1px solid rgba(119, 119, 119, 0.08)
    }

    .bs-callout-default.border-fade2 {
        border-top: 1px solid rgba(119, 119, 119, 0.08);
        border-bottom: 1px solid rgba(119, 119, 119, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-default.border-bold {
        border: 2px solid rgba(119, 119, 119, 0.7)
    }

    .bs-callout-blue {
        background-color: rgba(15, 129, 215, 0.1);
        border-color: rgba(15, 129, 215, 0.07);
        border-left-color: #0f81d7
    }

    .bs-callout-blue h1,
    .bs-callout-blue h2,
    .bs-callout-blue h3,
    .bs-callout-blue h4,
    .bs-callout-blue h5 {
        color: #0f81d7
    }

    .bs-callout-blue.border-fade {
        border: 1px solid rgba(15, 129, 215, 0.08)
    }

    .bs-callout-blue.border-fade2 {
        border-top: 1px solid rgba(15, 129, 215, 0.08);
        border-bottom: 1px solid rgba(15, 129, 215, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-blue.border-bold {
        border: 2px solid rgba(15, 129, 215, 0.7)
    }

    .bs-callout-success {
        background-color: rgba(47, 112, 0, 0.1);
        border-color: rgba(47, 112, 0, 0.07);
        border-left-color: #2f7000
    }

    .bs-callout-success h1,
    .bs-callout-success h2,
    .bs-callout-success h3,
    .bs-callout-success h4,
    .bs-callout-success h5 {
        color: #2f7000
    }

    .bs-callout-success.border-fade {
        border: 1px solid rgba(47, 112, 0, 0.08)
    }

    .bs-callout-success.border-fade2 {
        border-top: 1px solid rgba(47, 112, 0, 0.08);
        border-bottom: 1px solid rgba(47, 112, 0, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-success.border-bold {
        border: 2px solid rgba(47, 112, 0, 0.7)
    }

    .bs-callout-danger {
        background-color: rgba(217, 83, 79, 0.1);
        border-color: rgba(217, 83, 79, 0.07);
        border-left-color: #D9534F
    }

    .bs-callout-danger h1,
    .bs-callout-danger h2,
    .bs-callout-danger h3,
    .bs-callout-danger h4,
    .bs-callout-danger h5 {
        color: #D9534F
    }

    .bs-callout-danger.border-fade {
        border: 1px solid rgba(217, 83, 79, 0.08)
    }

    .bs-callout-danger.border-fade2 {
        border-top: 1px solid rgba(217, 83, 79, 0.08);
        border-bottom: 1px solid rgba(217, 83, 79, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-danger.border-bold {
        border: 2px solid rgba(217, 83, 79, 0.7)
    }

    .bs-callout-warning {
        background-color: rgba(247, 147, 33, 0.1);
        border-color: rgba(247, 147, 33, 0.07);
        border-left-color: #F79321
    }

    .bs-callout-warning h1,
    .bs-callout-warning h2,
    .bs-callout-warning h3,
    .bs-callout-warning h4,
    .bs-callout-warning h5 {
        color: #F79321
    }

    .bs-callout-warning.border-fade {
        border: 1px solid rgba(247, 147, 33, 0.08)
    }

    .bs-callout-warning.border-fade2 {
        border-top: 1px solid rgba(247, 147, 33, 0.08);
        border-bottom: 1px solid rgba(247, 147, 33, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-warning.border-bold {
        border: 2px solid rgba(247, 147, 33, 0.7)
    }

    .bs-callout-info {
        background-color: rgba(38, 190, 214, 0.1);
        border-color: rgba(38, 190, 214, 0.07);
        border-left-color: #26bed6
    }

    .bs-callout-info h1,
    .bs-callout-info h2,
    .bs-callout-info h3,
    .bs-callout-info h4,
    .bs-callout-info h5 {
        color: #26bed6
    }

    .bs-callout-info.border-fade {
        border: 1px solid rgba(38, 190, 214, 0.08)
    }

    .bs-callout-info.border-fade2 {
        border-top: 1px solid rgba(38, 190, 214, 0.08);
        border-bottom: 1px solid rgba(38, 190, 214, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-info.border-bold {
        border: 2px solid rgba(38, 190, 214, 0.7)
    }

    .bs-callout-facebook {
        background-color: rgba(148, 151, 163, 0.1);
        border-color: rgba(148, 151, 163, 0.07);
        border-left-color: #9497A3
    }

    .bs-callout-facebook h1,
    .bs-callout-facebook h2,
    .bs-callout-facebook h3,
    .bs-callout-facebook h4,
    .bs-callout-facebook h5 {
        color: #9497A3
    }

    .bs-callout-facebook.border-fade {
        border: 1px solid rgba(148, 151, 163, 0.08)
    }

    .bs-callout-facebook.border-fade2 {
        border-top: 1px solid rgba(148, 151, 163, 0.08);
        border-bottom: 1px solid rgba(148, 151, 163, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-facebook.border-bold {
        border: 2px solid rgba(148, 151, 163, 0.7)
    }

    .bs-callout-primary {
        background-color: rgba(0, 60, 113, 0.03);
        border-color: rgba(0, 60, 113, 0.07);
        border-left-color: #003C71
    }

    .bs-callout-primary h1,
    .bs-callout-primary h2,
    .bs-callout-primary h3,
    .bs-callout-primary h4,
    .bs-callout-primary h5 {
        color: #003C71
    }

    .bs-callout-primary.border-fade {
        border: 1px solid rgba(0, 60, 113, 0.08)
    }

    .bs-callout-primary.border-fade2 {
        border-top: 1px solid rgba(0, 60, 113, 0.08);
        border-bottom: 1px solid rgba(0, 60, 113, 0.08);
        border-left: none;
        border-right: none
    }

    .bs-callout-primary.border-bold {
        border: 1px solid rgba(0, 60, 113, 0.9)
    }

    .handleBarsPopularLocationItem .media .media-left picture img {
        width: 60px;
        border-radius: 2px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .handleBarsPopularLocationItem .media .media-body .media-heading {
        color: #494b55
    }

    .typeahead-flightcode {
        width: 35px;
        display: inline-block
    }

    .newLabel {
        position: relative;
        top: 2px
    }

    .typeAHeadDiv .emptyData {
        padding: 15px;
        text-align: center
    }

    .typeAHeadDiv .dataTitle {
        padding: 15px 15px 5px 15px;
        margin: 0px;
        font-weight: bold;
        border-top: 1px solid #ddd;
        color: #003C71
    }

    .typeAHeadDiv .dataTitle .fa {
        color: #003C71
    }

    .typeAHeadDiv .twitter-typeahead {
        width: 100%
    }

    .typeAHeadDiv .twitter-typeahead input {
        color: #494b55
    }

    .typeAHeadDiv .input-group-btn {
        top: -2px
    }

    @-moz-document url-prefix() {
        .typeAHeadDiv .input-group-btn {
            top: -3px
        }
    }

    .typeAHeadDiv .tt-hint {
        color: #818180 !important
    }

    .typeAHeadDiv .tt-menu {
        width: 100%;
        margin-top: 1px;
        border-bottom: 1px solid #ddd;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-top: 0px;
        color: #494b55
    }

    .typeAHeadDiv .tt-menu .tt-dataset {
        width: 100%;
        background-color: #fff
    }

    .typeAHeadDiv .tt-menu .tt-dataset-popularLocation {
        padding-bottom: 10px
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion {
        padding: 8px 15px
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion .tourCount {
        margin-left: 5px;
        font-size: 12px;
        color: #003C71
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion mark {
        padding: 0px;
        color: #494b55;
        font-weight: bold;
        background-color: transparent
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable {
        transition: all .2s ease-in-out;
        cursor: pointer
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable:hover {
        background-color: rgba(64, 166, 242, 0.1)
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable.tt-cursor {
        background-color: rgba(64, 166, 242, 0.1)
    }

    body {
        position: relative
    }

    @media only screen and (max-width: 360px) {
        body {
            font-size: 13px
        }
    }

    @media only screen and (max-width: 320px) {
        body {
            font-size: 12px
        }
    }

    .hide-class {
        display: none
    }

    .fixed-footer {
        position: fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        z-index: 11;
        display: none;
        width: 100%;
        background: white
    }

    .fixed-footer.scrolled {
        display: block
    }

    .fixed-footer .container {
        padding: 0px
    }

    .fixed-footer .box {
        margin: 0px;
        box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.12)
    }

    .fixed-footer .btn-roll-mobile {
        height: 47px;
        border-radius: 4px
    }

    .htdt-extend {
        margin-top: 8px;
        background: #ffffff
    }

    .htdt-extend .htdt-youtube {
        position: relative;
        background: #ffffff;
        color: #007685;
        padding: 0;
        border-radius: 8px;
        margin-bottom: 0
    }

    .htdt-extend .htdt-youtube.stopped {
        min-height: 110px
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ythumb {
        position: absolute;
        top: 10px;
        left: 0
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ythumb .htdt-ywrap {
        display: inline-block;
        position: relative
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ythumb .htdt-ywrap img {
        width: 120px;
        height: 90px
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ythumb .htdt-ywrap .icn-youtube {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -15px;
        margin-left: -21px;
        background-position: -342px 0;
        width: 42px;
        height: 30px
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ycont {
        padding-left: 130px
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ycont .htdt-ybadges {
        display: inline-block;
        padding: 2px 10px;
        background: #ffac23;
        color: #FFFFFF;
        border-radius: 6px;
        font-size: 12px;
        margin: 10px 0 0
    }

    .htdt-extend .htdt-youtube.stopped .htdt-ycont h2 {
        font-size: 16px
    }

    .htdt-extend .htdt-youtube.playing h2 {
        font-size: 20px;
        display: block;
        text-align: center;
        margin: 10px 0 10px
    }

    .htdt-extend .htdt-youtube.playing .htdt-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        margin-bottom: 10px
    }

    .htdt-extend .htdt-youtube.playing .htdt-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }


    .price-color {
        color: #ffbd00;
        font-size: 16px;
        line-height: 20px;
        position: absolute;
        top: 15px;
        right: 130px
    }

    @media only screen and (max-width: 360px) {
        .price-color {
            font-size: 14px;
            right: 105px
        }
    }

    @media only screen and (max-width: 320px) {
        .price-color {
            font-size: 13px;
            right: 100px
        }
    }

    .text-right .price-text {
        top: 2px;
        color: #ffbd00;
        font-size: 16px
    }

    .bookButton.disabled {
        cursor: pointer !important
    }

    .number-detail {
        font-size: 22px;
        font-weight: 500;
        padding-right: 10px;
        color: #000
    }

    .text-detail {
        top: 15px;
        position: absolute
    }

    .text-detail .width-70 {
        width: 75px;
        display: inline-block
    }

    .text-detail .width-70.hadsub {
        margin-top: -10px
    }

    .text-detail .width-70 .sub {
        display: block;
        color: #828282;
        font-size: 14px
    }

    .lblPrice {
        font-size: 16px;
        line-height: 42px
    }

    .supplement .form-control-feedback {
        right: -5px;
        font-size: 20px;
        line-height: 40px
    }

    .supplement .form-control-plus {
        position: absolute;
        top: 0;
        z-index: 2;
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        pointer-events: none;
        font-size: 12px
    }

    .supplement .price {
        color: #00c1de !important;
        font-size: 14px !important;
        font-weight: normal !important
    }

    .specialPrice {
        color: #00c1de;
        float: right;
        font-size: 16px
    }

    /* @media only screen and(max-width:998px) {
        .affix-top {
            display: none;
        }
    } */

    .tourFormPrice #tourSideBarUL .nav-tabs.nav-stacked {
        position: relative;
        z-index: 3
    }

    .tourFormPrice #tourSideBarUL .nav-tabs.nav-stacked#event-scroll-content {
        z-index: 1
    }

    .tourFormPrice #tourSideBarUL .bg-shadow {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0.35);
        display: none;
        visibility: hidden
    }

    .tourFormPrice #tourSideBarUL .bg-shadow.show {
        display: block;
        visibility: visible
    }

    .tourFormPrice #tourSideBarUL.affix {
        z-index: 1
    }

    /* scroll */
    .tourFormPrice #tourSideBarUL.affix-top {
        z-index: 1
    }

    .tourFormPrice#mobile-booking-form .highlight {
        position: relative;
        z-index: 3;
        background-color: #fff
    }

    .tourFormPrice#mobile-booking-form .bg-shadow {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0.35);
        display: none;
        visibility: hidden
    }

    .tourFormPrice#mobile-booking-form .bg-shadow.show {
        display: block;
        visibility: visible
    }

    .tourFormPrice .adult-surcharge {
        margin: -3px 0;
        font-size: 16px
    }

    .tourFormPrice .adult-surcharge .text-yellow {
        color: #ec971f
    }

    .tourFormPrice .adult-surcharge .text-left::first-letter {
        text-transform: capitalize
    }

    .tourFormPrice .RateSurchargeAdult.hide-class {
        display: block
    }

    #getBundlePriceModal .wrap-header-request {
        position: relative;
        background-color: #003c71;
        text-align: center;
        margin-bottom: 10px;
        top: -1px
    }

    #getBundlePriceModal .wrap-header-request .title {
        display: inline-block;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        line-height: 51px
    }

    #getBundlePriceModal .wrap-header-request .btn-back-request {
        position: absolute;
        top: 0;
        left: 0;
        padding: 13px
    }

    #getBundlePriceModal input.form-control {
        height: 40px
    }

    @media only screen and (max-width: 767px) {
        #getBundlePriceModal {
            padding-top: 0
        }

        #getBundlePriceModal.modal {
            background-color: #fff
        }

        #getBundlePriceModal .modal-dialog {
            position: fixed;
            width: 100%;
            height: 100%;
            margin: 0
        }

        #getBundlePriceModal .modal-dialog .modal-content {
            border: none;
            box-shadow: none;
            position: absolute;
            width: 100%;
            height: 100%
        }

        #getBundlePriceModal .modal-dialog .modal-content .modal__title {
            margin: 0
        }

        #getBundlePriceModal .modal-dialog .modal-content .modal-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 6px 0 rgba(0, 0, 0, 0.1);
            padding: 8px 0px
        }

        #getBundlePriceModal .modal-dialog .modal-content .modal-footer .btn {
            margin-bottom: 0;

        }
    }

    #mobile-booking-form {
        display: none;
        position: fixed;
        z-index: 10;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff
    }

    #mobile-booking-form .wrap-header-booking {
        position: relative;
        background-color: #003c71;
        border-top: solid 1px #003c71;
        text-align: center;
        top: 0
    }

    #mobile-booking-form .wrap-header-booking .title {
        display: inline-block;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        line-height: 50px
    }

    #mobile-booking-form .wrap-header-booking .btn-back-tour {
        position: absolute;
        top: 0;
        left: 0;
        padding: 13px
    }

    #mobile-booking-form .mobile-booking-title {
        font-size: 22px;
        color: #003c71;
        margin: 0 0 15px
    }

    #mobile-booking-form .floatBox {
        border: none
    }

    #mobile-booking-form .floatBox .highlight .call-now {
        color: #3f3b3b
    }

    #mobile-booking-form .floatBox .highlight .call-now a {
        color: #26bed6
    }

    #mobile-booking-form .fixed-btn-moble {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 8px 15px;
        box-shadow: 0 -2px 4px 0 rgba(0, 0, 0, 0.05)
    }

    #mobile-booking-form.show {
        display: block
    }

    .fixed-footer-m {
        position: fixed;
        z-index: 2;
        background-color: #fff;
        bottom: -1px;
        width: 100%;
        padding: 8px 0;
        box-shadow: 0 -2px 4px 0 rgba(0, 0, 0, 0.05)
    }

    .fixed-footer-m .price-note {
        font-size: 12px;
        color: #f79321
    }

    .fixed-footer-m .price-note small {
        display: block;
        color: #3f3b3b
    }

    .fixed-footer-m .price-note .price {
        font-size: 22px;
        line-height: 22px;
        font-weight: bold
    }

    .floatBox {
        transition: all .2s ease-in-out;
        padding-top: 15px;
        background-color: rgba(0, 60, 113, 0.05);
        border: 1px solid rgba(0, 60, 113, 0.05)
    }

    .floatBox.highlight {
        background-color: #feeec7;
        *background: linear-gradient(to bottom, #fff 0, #fff 100%);
        border-radius: 4px
    }

    .floatBox.highlight .wrapper-depart-date {
        display: flex;
        flex-direction: row;
        padding: 0
    }

    .floatBox.highlight .wrapper-depart-date .left .ls-date {
        display: flex;
        flex-wrap: nowrap;
        list-style: none;
        padding-inline-start: 0
    }

    .floatBox.highlight .wrapper-depart-date .left .ls-date .item {
        line-height: 41px;
        margin-bottom: 0;
        margin-right: 8px;
        cursor: pointer
    }

    .floatBox.highlight .wrapper-depart-date .left .ls-date .item.box-white {
        padding: 5px 12px
    }

    .floatBox.highlight .wrapper-depart-date .left .ls-date .item.box-white.active {
        border: solid 2px #26bed6
    }

    .floatBox.highlight .wrapper-depart-date .right {
        flex-grow: 1
    }

    .floatBox.highlight .showCancelPolicy {
        color: #26bed6;
        font-size: 16px;
        font-style: italic
    }

    .floatBox.highlight .box-white {
        min-height: 54px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.15);
        margin-bottom: 10px;
        padding: 5px 10px;
        position: relative;
        font-size: 16px
    }

    .floatBox.highlight .box-white.lock {
        background-color: #ecf0f5;
        opacity: 0.4
    }

    .floatBox.highlight .box-white.lock .date-input-group .date-input {
        cursor: default
    }

    .floatBox.highlight .box-white.lock .btn-group {
        cursor: default
    }

    .floatBox.highlight .box-white.lock .btn-group .number-button {
        cursor: default;
        background-color: #e8ebed
    }

    .floatBox.highlight .box-white.lock .btn-group .number-child {
        cursor: default
    }

    .floatBox.highlight .box-white .form-group {
        margin-bottom: 0
    }

    .floatBox.highlight .box-white .child-popover {
        position: absolute;
        width: 100%;
        height: auto;
        background-color: #fff;
        padding: 4px 0 6px 14px;
        border-radius: 5px;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.25);
        z-index: 1;
        top: calc(100% + 5px);
        right: 0
    }

    .floatBox.highlight .box-white .child-popover .child-ages {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0 10px 0 0;
        -moz-font-feature-settings: "liga" on
    }

    .floatBox.highlight .box-white .child-popover .child-ages .child-ages__item {
        display: flex;
        padding: 5px 5px 5px 0;
        border-bottom: none
    }

    @media only screen and (min-width: 320px) {
        .floatBox.highlight .box-white .child-popover .child-ages .child-ages__item {
            width: calc(100% / 4)
        }
    }

    .floatBox.highlight .box-white .child-popover .child-ages .child-ages__item .select-child {
        position: relative
    }

    .floatBox.highlight .box-white .child-popover .child-ages .child-ages__item .select-child .form-control-feedback.fa {
        font-size: 20px;
        line-height: 40px
    }

    .floatBox.highlight .box-white .child-popover .close-popover {
        cursor: pointer;
        margin-right: 14px;
        float: right;
        padding: 2px 10px;
        background: #ebebeb;
        border-radius: 5px;
        color: #27bed6
    }

    .floatBox.highlight .title {
        font-size: 20px;
        font-weight: bold;
        color: #003c71;
        margin-bottom: 10px
    }

    .floatBox.highlight .call-now {
        color: #00467e;
        font-weight: bold
    }

    .floatBox.highlight .call-now a {
        color: #003c71;
        padding: 0;
        font-size: 14px
    }

    .floatBox.highlight .call-now a:hover {
        background-color: transparent
    }

    @media only screen and (max-width: 390px) {
        .floatBox.highlight .call-now {
            font-size: 15px;
            color: #3f3b3b
        }

        .floatBox.highlight .call-now a {
            color: #26bed6
        }
    }

    .floatBox.highlight .tourItemFull {
        font-size: 26px;
        color: #a4a4a3;
        text-align: center;
        display: block
    }

    .floatBox.highlight .control-label {
        margin-top: 5px;
        height: 34px;
        margin-bottom: 0
    }

    .floatBox.highlight .priceDiv .price {
        color: #FFBD00;
        font-weight: bold
    }

    .floatBox.highlight .date-input-group {
        width: 100%;
        position: relative
    }

    .floatBox.highlight .date-input-group i {
        position: absolute;
        top: 15px;
        left: 3px
    }

    @media only screen and (max-width: 360px) {
        .floatBox.highlight .date-input-group {
            width: 90px
        }
    }

    .floatBox.highlight .date-input-group .ico-ic_date {
        position: absolute;
        padding-left: 12px;
        padding-top: 18px;
        z-index: 1;
        font-size: 18px
    }

    .floatBox.highlight .date-input-group .date-input {
        padding: 5px 0 0 30px;
        cursor: pointer;
        height: 34px;
        background-color: transparent;
        border-width: 0
    }

    @media only screen and (max-width: 360px) {
        .floatBox.highlight .date-input-group .date-input {
            padding: 6px
        }
    }

    .floatBox.highlight .date-input-group .date-input .DateCheckinText {
        font-size: 15px;
        color: #494b55
    }

    .floatBox.highlight .btn-left {
        padding: 0 5px 0 0
    }

    .floatBox.highlight .btn-right {
        padding: 0 0 0 5px
    }

    .floatBox.highlight .btn-right.disable {
        opacity: 0.3
    }

    .floatBox.highlight .btn-right.disable button {
        cursor: default
    }

    .floatBox.highlight input,
    .floatBox.highlight select,
    .floatBox.highlight .bookButton {
        height: 40px;
        border: 1px solid #d2d6de;
        border-radius: 4px;
        font-size: 16px
    }

    .floatBox.highlight input.form-control,
    .floatBox.highlight select.form-control,
    .floatBox.highlight .bookButton.form-control {
        background-color: white
    }

    .floatBox.highlight input.childage-select,
    .floatBox.highlight select.childage-select,
    .floatBox.highlight .bookButton.childage-select {
        border: 1px solid #d2d6de
    }

    .floatBox.highlight .adviseButton {
        background-color: #fff;
        color: #f79321
    }

    .floatBox.highlight .adviseButton:hover,
    .floatBox.highlight .adviseButton:focus {
        color: #fff;
        background-color: #f79321;

    }

    .floatBox.highlight .adviseButton,
    .floatBox.highlight .bookButton,
    .floatBox.highlight .checkButton,
    .floatBox.highlight .requestButton,
    .floatBox.highlight .requestdisableButton,
    .floatBox.highlight .processingButton {
        height: 47px;
        border-radius: 4px;
        font-size: 18px
    }

    .floatBox.highlight .btn_description {
        border: 1px solid #F79321;
        background: white;
        color: #F79321;
        text-align: center;
        padding: 5px;
        border-radius: 0px 0px 4px 4px
    }

    .floatBox.highlight .devide-line {
        border-bottom: 1px solid #d2d6de;
        padding-top: 8px
    }

    .floatBox.highlight .btn-group {
        width: 110px;
        height: 30px;
        float: right;
        margin-top: 6px
    }

    @media only screen and (max-width: 360px) {
        .floatBox.highlight .btn-group {
            width: 90px
        }
    }

    .floatBox.highlight .btn-group .number-button {
        background-color: #fff;
        width: 36px;
        padding: 4px
    }

    @media only screen and (max-width: 360px) {
        .floatBox.highlight .btn-group .number-button {
            width: 36px
        }
    }

    .floatBox.highlight .btn-group .number-button .fa {
        color: #4f4f4f;
        font-size: 13px
    }

    .floatBox.highlight .btn-group .number-detail {
        float: left;
        font-size: 16px;
        font-weight: 300;
        padding: 4px 0;
        min-width: 38px;
        text-align: center
    }

    .floatBox.highlight .btn-group .number-detail.number-child {
        cursor: pointer
    }

    .floatBox.highlight p {
        font-size: 12px;
        color: #828282
    }

    .floatBox.highlight .ivivuPoint-checkbox {
        display: block;
        position: relative;
        padding-left: 22px;
        margin-bottom: 0px;
        margin: 10px auto 10px auto;
        cursor: pointer;
        font-size: 14px;
        font-weight: normal;
        user-select: none;
        color: #555863;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .floatBox.highlight .ivivuPoint-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0
    }

    .floatBox.highlight .ivivuPoint-checkbox .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 13px;
        width: 13px;
        background-color: #ddd;
        border-radius: 2px
    }

    .floatBox.highlight .ivivuPoint-checkbox input:checked~.checkmark {
        background-color: #003C71
    }

    .floatBox.highlight .ivivuPoint-checkbox .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        left: 4px;
        top: 1px;
        width: 5px;
        height: 9px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .floatBox.highlight .ivivuPoint-checkbox input:checked~.checkmark:after {
        display: block
    }

    .floatBox.highlight .showMsgPrice {
        color: #26bed6;
        border-radius: 4px;
        font-size: 16px;
        margin-bottom: 5px;
        padding: 5px 0px
    }

    .floatBox.highlight .showMsgPrice .color-red {
        color: #e52822
    }

    .floatBox.highlight .showMsgPrice .color-gray {
        color: #3f3b3b
    }

    .floatBox.highlight .showMsgPrice img {
        position: relative;
        top: inherit;
        right: inherit;
        display: inline-block;
        visibility: visible
    }

    .floatBox input[type="text"] {
        font-size: 13px
    }

    .floatBox .form-group label {
        font-weight: normal;
        position: relative;
        top: 7px
    }

    .floatBox .priceDiv .price {
        color: #26bed6;
        float: right
    }

    .floatBox .priceDiv .price .tourItemCurrency {
        font-size: 13px;
        font-weight: normal
    }

    @media only screen and (min-width: 320px) {
        .floatBox .priceDiv .price {
            font-size: 28px
        }
    }

    @media only screen and (min-width: 768px) {
        .floatBox .priceDiv .price {
            font-size: 27px
        }
    }

    .floatBox .priceDiv .labelPrice {
        float: left;
        color: #494b55;
        margin-top: 10px
    }

    .floatBox .priceDiv .labelPrice i {
        color: #ffbd00;
        margin-right: 5px
    }

    .floatBox .priceDiv .price-ota {
        position: absolute;
        left: 0;
        top: -18px;
        font-size: 16px
    }

    .floatBox .priceDiv .price-line {
        position: absolute;
        right: 0;
        top: -18px;
        font-size: 16px;
        text-decoration: line-through;
        display: block
    }

    .floatBox .priceDiv .perGuest {
        color: #4E4E4E
    }

    .floatBox .adjustDateButton {
        background-image: none;
        background-color: #F1F1F2;
        transition: all .15s ease-in-out
    }

    .floatBox .adjustDateButton:hover {
        background-color: #d8d8d8
    }

    .floatBox .bookButton {
        background-image: none;
        background-color: #F79321;
        text-shadow: none;
        transition: all .15s ease-in-out;
        border-width: 0px !important;
        padding-top: 7px;
        padding-bottom: 7px
    }

    .floatBox .bookButton:hover {
        background-color: #f9ab52
    }

    .tourDetailheadLine {
        padding: 10px 0;
        margin-top: 15px;
        margin-bottom: 10px;
        font-size: 26px;
        font-weight: bold
    }

    .tourDetailheadLine span {
        color: #26bed6
    }

    @media only screen and (max-width: 320px) {
        .tourDetailheadLine {
            font-size: 20px
        }
    }

    .tourDetailheadLine__collapse {
        text-transform: inherit;
        font-size: 24px;
        font-weight: 400;
        color: #003C71;
        margin: 0;
        padding: 5px 0;
        cursor: pointer;
        position: relative
    }

    .tourDetailheadLine__collapse .icon-collapse::before {
        content: "\e902";
        font-family: 'icomoon';
        position: absolute;
        right: 0;
        font-style: initial
    }

    .tourDetailheadLine__collapse.collapsed .icon-collapse::before {
        content: "\e908";
        font-family: 'icomoon';
        position: absolute;
        right: 0;
        font-style: initial
    }

    .row__collapse {
        padding: 0 15px
    }

    .tourCollapse {
        border-bottom: 1px solid #eee;
        padding: 10px 0
    }

    .tourCollapse h4 {
        font-size: 18px;
        font-weight: bold;
        color: #333
    }

    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%
    }

    .embed-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .v-margin-right-5 {
        margin-right: 5px
    }

    .margin-left-15 {
        margin-left: 15px
    }

    @media only screen and (max-width: 767px) {
        .md-margin-bottom-15 {
            margin-bottom: 15px
        }
    }

    section.content h2:first-child {
        line-height: 1.3
    }

    @media only screen and (min-width: 320px) {
        section.content h2:first-child {
            padding-left: 15px;
            padding-right: 15px
        }
    }

    @media only screen and (min-width: 480px) {
        section.content h2:first-child {
            padding-left: 0px;
            padding-right: 0px
        }
    }

    .tourHeaderInfo {
        font-weight: bold
    }

    .tourHeaderInfo span {
        line-height: 1.8
    }

    @media only screen and (max-width: 767px) {
        .tourHeaderInfo .timeName {
            width: 35%;
            margin-right: 0 !important
        }

        .tourHeaderInfo .transports {
            width: 64%;
            margin-right: 0 !important;
            text-align: right;
            float: right
        }
    }

    .tourHeaderInfo i.fa {
        margin: 0 5px
    }

    .tourHeaderInfo i.glyphicon {
        margin-right: 5px
    }

    .tourHeaderInfo.belowCover {
        padding: 15px 0px;
        color: #50535d;
        text-shadow: 0 0 1px white;
        background: rgba(148, 151, 163, 0.1);
        border-bottom: 1px solid rgba(148, 151, 163, 0.15);
        font-size: 16px
    }

    @media only screen and (max-width: 375px) {
        .tourHeaderInfo.belowCover {
            font-size: 14px
        }
    }

    @media only screen and (max-width: 360px) {
        .tourHeaderInfo.belowCover {
            font-size: 13px
        }
    }

    @media only screen and (max-width: 320px) {
        .tourHeaderInfo.belowCover {
            font-size: 11px
        }
    }

    .tourHeaderInfo.belowCover .v-margin-right-30 {
        margin-right: 15px
    }

    .tourHeaderInfo.belowCover .tourHeaderTourCodeDiv {
        text-align: right;
        position: absolute;
        top: 0px;
        right: 15px
    }

    .tourHeaderInfo.belowCover .tourHeaderTourOrganization {
        color: #50535d;
        text-align: right;
        position: absolute;
        top: 0px;
        right: 15px
    }

    .tourHeaderInfo.belowCover .tourHeaderTourOrganization img {
        margin-top: -5px
    }

    .tourHeaderInfo.belowCover .tourHeaderTourOrganization .organization-number {
        font-weight: 400
    }

    .tourHeaderContainer {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    @media only screen and (max-width: 767px) {
        .tourHeaderContainer .padding-mobile {
            padding-left: 15px !important;
            padding-right: 15px !important
        }
    }


    .tourHeaderContainer .accordion-detail {
        background-color: #f9fbfc;
        color: #003c71;
        cursor: pointer;
        padding: 12px 15px;
        width: 100%;
        font-size: 16px;
        text-align: left;
        border: none;
        border-bottom: solid 1px #ecf0f5;
        outline: none;
        transition: 0.4s;
        position: relative
    }

    .tourHeaderContainer .accordion-detail img {
        position: absolute;
        top: 12px;
        right: 15px
    }

    .tourHeaderContainer .accordion-detail .img-active {
        display: none;
        visibility: hidden
    }

    .tourHeaderContainer .accordion-detail.active {
        color: #26bed6;
        font-weight: bold
    }

    .tourHeaderContainer .accordion-detail.active .img-default {
        display: none;
        visibility: hidden
    }

    .tourHeaderContainer .accordion-detail.active .img-active {
        display: block;
        visibility: visible
    }

    .tourHeaderContainer .panel-detail {
        overflow: hidden;
        margin-top: 8px;
        transition: max-height 0.2s ease-out
    }

    .tourHeaderContainer .tourHeaderContent {
        background: #fff
    }

    @media only screen and (max-width: 767px) {
        .tourHeaderContainer .tourHeaderContent . {
            border: none;
            border-radius: 4px;
            box-shadow: 0 1px 7px 0 rgba(0, 0, 0, 0.25);
            margin-top: 20px
        }
    }

    .tourHeaderContainer .tourHeaderContent .mobile-booking-form img {
        width: 200px;
        height: 150px;
        margin: 0 auto;
        display: block
    }

    .tourHeaderContainer .tourHeaderContent .title-form .item-m {
        padding-right: 0
    }

    @media only screen and (max-width: 767px) {
        .tourHeaderContainer .tourHeaderContent#detail-departure {
            padding: 0
        }

        .tourHeaderContainer .tourHeaderContent#detail-departure .tourDetailheadLine {
            padding: 10px 15px
        }

        .tourHeaderContainer .tourHeaderContent#detail-departure .search-date {
            right: 30px
        }

        .tourHeaderContainer .tourHeaderContent#detail-departure .title-form .price {
            text-align: right
        }

        .tourHeaderContainer .tourHeaderContent#detail-departure .date-mobile {
            padding-right: 0
        }

        .tourHeaderContainer .tourHeaderContent#detail-departure .price__mobile {
            text-align: right
        }
    }

    @media only screen and (max-width: 375px) {
        .tourHeaderContainer .tourHeaderContent .date-mobile {
            padding-left: 10px
        }
    }

    .tourHeaderContainer .tourHeaderBookingDiv .floatBox {
        border-style: solid;
        border-left: none;
        border-right: none;
        border-bottom: none;
        border-radius: 4px
    }

    .tourHeaderCover2 {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        background-size: cover;
        background-position: center
    }

    @media only screen and (min-width: 320px) {
        .tourHeaderCover2 {
            height: 290px
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHeaderCover2 {
            height: 390px
        }
    }

    @media only screen and (max-width: 767px) {
        .tourHeaderCover2 {
            margin-bottom: 15px
        }
    }

    .tourHeaderCover2 .ribbonContainerInner .v-ribbon h1 {
        top: 43px;
        padding: 7px 12px 7px 18px
    }

    @media only screen and (max-width: 414px) {
        .tourHeaderCover2 .ribbonContainerInner .v-ribbon h1 {
            top: 30px;
            left: 30px
        }
    }

    .tourHeaderCover2 .ribbonContainerInner .v-ribbon h1 label {
        margin-bottom: 0
    }

    .tourHeaderCover2 .tourHeaderBackgroundTrans {
        display: flex;
        background-color: rgba(73, 75, 85, 0.3);
        align-items: center;
        justify-content: center;
        height: 100%;
        text-shadow: 0 0 1px #31333a
    }

    .tourHeaderCover2 .tourHeaderBackgroundTrans .title {
        font-size: 32px
    }

    .tourHeaderCover2 .tourHeaderCoverTitle {
        transition: all .2s ease-in-out;
        left: 0px;
        width: 100%;
        background-color: rgba(235, 235, 235, 0.75);
        text-align: left;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    @media only screen and (min-width: 320px) {
        .tourHeaderCover2 .tourHeaderCoverTitle {
            position: absolute;
            bottom: 20px
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHeaderCover2 .tourHeaderCoverTitle {
            position: absolute;
            bottom: 90px
        }
    }

    .tourHeaderCover2 .tourHeaderCoverTitle h1 {
        line-height: 1.3;
        margin: 0px;
        padding: 10px 15px;
        color: #003C71;
        text-shadow: 0 0 1px #F9F9F9
    }

    @media only screen and (min-width: 320px) {
        .tourHeaderCover2 .tourHeaderCoverTitle h1 {
            font-size: 24px
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHeaderCover2 .tourHeaderCoverTitle h1 {
            font-size: 48px
        }
    }

    .countTourBooking24H {
        position: relative;
        background-color: #fce9e9;
        color: #e52822;
        padding: 4px 15px 5px;
        margin: 8px 0 0;
        line-height: 30px
    }

    @media only screen and (max-width: 767px) {
        .countTourBooking24H {
            margin: 8px 0
        }
    }

    .countTourBooking24H span {
        display: inline-block;
        border-radius: 4px;
        background-color: #e52822;
        color: #fff;
        font-weight: bold;
        padding: 2px 8px 3px;
        margin-right: 7px;
        line-height: initial
    }

    @media only screen and (max-width: 414px) {
        .countTourBooking24H span {
            font-size: 12px
        }
    }

    @media only screen and (max-width: 320px) {
        .countTourBooking24H span {
            font-size: 11px
        }
    }

    .accumulation-point {
        text-align: right;
        color: #003C71 !important;
        font-size: 14px !important;
        float: right
    }

    .member-point {
        text-align: center;
        color: #003C71 !important;
        font-size: 14px !important;
        padding: 10px 25px 10px 10px
    }

    .member-point__sidebar {
        padding: 10px 0px
    }

    .tourDetailContainer .tourDetailMainDiv p {
        line-height: 1.45;
        font-size: 16px
    }

    @media only screen and (min-width: 320px) {
        .tourDetailContainer .tourDetailMainDiv .tourScheduleContainer {
            padding-right: 0px;
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 480px) {
        .tourDetailContainer .tourDetailMainDiv .tourScheduleContainer {
            padding-right: 15px;
            padding-left: 15px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .tourSchedule h3 {
        font-size: 18px;
        color: #4E4E4E;
        text-transform: uppercase;
        font-weight: bold;
        line-height: 1.5
    }

    .tourDetailContainer .tourDetailMainDiv .tourSchedule h3:first-child {
        margin-top: 0px
    }

    @media only screen and (min-width: 320px) {

        .tourDetailContainer .tourDetailMainDiv .tourSchedule h3,
        .tourDetailContainer .tourDetailMainDiv .tourSchedule p {
            text-align: justify
        }
    }

    @media only screen and (min-width: 480px) {

        .tourDetailContainer .tourDetailMainDiv .tourSchedule h3,
        .tourDetailContainer .tourDetailMainDiv .tourSchedule p {
            text-align: inherit
        }
    }

    .tourDetailContainer .tourDetailMainDiv .tourSchedule img {
        margin: 0 auto;
        display: block;
        max-width: 100%;
        height: auto
    }

    .tourDetailContainer .tourDetailMainDiv .tourSchedule .tourScheduleTable thead td,
    .tourDetailContainer .tourDetailMainDiv .tourSchedule .tourScheduleTable tbody td {
        font-size: 14px;
        padding: 15px !important;
        color: #333;
        border-color: #e7eaf3
    }

    .tourDetailContainer .tourDetailMainDiv .tourService .tourServiceItem {
        padding-top: 10px;
        padding-bottom: 10px
    }

    .tourDetailContainer .tourDetailMainDiv .tourService .tourServiceItem span {
        color: #4E4E4E
    }

    .tourDetailContainer .tourDetailMainDiv .tourService .tourServiceItem span i {
        margin-right: 8px;
        color: #F79321
    }

    .tourDetailContainer .tourDetailMainDiv .tourRule .tab-content .tab-pane {
        padding-top: 10px
    }

    @media only screen and (max-width: 480px) {
        .tourDetailContainer .tourDetailMainDiv .tourRule .tab-content .tab-pane>div {
            padding: 0
        }
    }

    .tourDetailContainer .tourDetailMainDiv .tourRule .nav>li>a {
        padding: 10px 9px;
        font-size: 16px
    }

    @media only screen and (max-width: 480px) {
        .tourDetailContainer .tourDetailMainDiv .tourRule .nav>li>a {
            padding: 5px 7px;
            font-size: 14px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .tourRule .nav-tabs>li.active>a {
        font-weight: bold;
        color: #26bed6;
        border: 0;
        border-bottom: 3px solid #26bed6
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice {
        background-color: #feeec7;
        padding-bottom: 20px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .title-request {
        font-size: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook {
        border-radius: 4px;
        background-color: rgba(255, 255, 255, 0.3)
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner {
        margin: 15px 0
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .control-label {
        font-weight: inherit
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .form-control {
        border-radius: 4px;
        background-color: transparent
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .price {
        color: #ec971f;
        font-weight: bold;
        font-size: 27px;
        margin: 5px 0;
        display: block;
        cursor: pointer
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .price .tourItemCurrency {
        font-size: 13px;
        font-weight: normal
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .bookTourBottom,
    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .bookButton {
        border-radius: 4px;
        height: 47px;
        font-size: 18px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .tourItemBook .wrap-inner .hide-class {
        display: none
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .no-padding-right {
        padding-right: 0
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info {
        text-align: center;
        margin: 20px 0 0
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .avatar {
        margin-bottom: 8px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .avatar img {
        width: 124px;
        height: 124px;
        border-radius: 50%
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .avatar img.width-80 {
        width: 80px;
        height: 80px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .qacode-ivivu {
        margin-top: 10px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .qacode-ivivu img {
        width: 150px;
        height: 150px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .info {
        margin-bottom: 15px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .info span {
        font-size: 16px;
        display: block
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .desc {
        font-size: 16px;
        margin-bottom: 15px;
        text-align: left
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .experience {
        display: flex;
        text-align: left;
        margin-bottom: 15px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .experience img {
        display: inline-block;
        width: 24px;
        margin-right: 7px;
        vertical-align: top
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .experience span {
        display: inline-block;
        width: calc(100% - 32px);
        font-size: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .contact {
        display: flex;
        text-align: left
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .contact img {
        display: inline-block;
        width: 24px;
        margin-right: 7px;
        vertical-align: top
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .contact img.width-16 {
        width: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .contact .call {
        font-size: 16px;
        color: #494b55;
        margin-right: 10px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .text,
    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .time {
        font-size: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .bg-askForAdvice .advice-info .phone {
        font-size: 24px;
        color: #ec971f;
        font-weight: bold
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .search-date {
        margin-top: 15px;
        margin-bottom: 10px;
        width: 120px;
        position: absolute;
        right: 15px;
        top: 5px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .search-date .ico-ic_date {
        position: absolute;
        font-size: 20px;
        left: 7px;
        top: 6px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .search-date .form-control {
        background-color: #fff;
        height: 40px;
        cursor: pointer
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .search-date .form-control .DepartureText {
        float: right;
        font-weight: normal
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .title-form {
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 5px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .price .col-price {
        float: right;
        padding-right: 40px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group {
        border: 1px #ddd solid
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default {
        border: none;
        border-top: 1px solid #ddd;
        display: none
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default:first-child {
        border: none
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .price-color {
        top: 6px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading {
        border: none;
        height: 47px;
        background-color: #ffffff;
        padding: 0 15px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading.color-green {
        background-color: #003c71 !important
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading.color-green a {
        color: #ffffff !important
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading.color-green a .red-available {
        color: #ffffff !important
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading.flag_bg {
        background-color: #f2f2f2
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading.flag_bg .panel-title a {
        color: #000000
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a {
        font-size: 16px !important;
        color: #000000;
        font-weight: 400;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        position: relative;
        width: 100%;
        display: inline-block;
        line-height: 47px
    }

    @media only screen and (max-width: 360px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a {
            font-size: 14px !important
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .fa-fire {
        color: transparent
    }

    @media only screen and (max-width: 768px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .item-total-price {
            padding-left: 0
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .red_color {
        color: #e52822;
        font-size: 16px
    }

    @media only screen and (max-width: 360px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .red_color {
            font-size: 14px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .green_color {
        color: #9fc43a;
        font-size: 16px;
        font-weight: bold
    }

    @media only screen and (max-width: 360px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .green_color {
            font-size: 14px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title a .red-available {
        color: #e52822
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-heading .panel-title>a .arrow-next {
        top: 14px;
        right: 10px;
        position: absolute;
        width: 20px;
        height: 20px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body {
        border: none
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ContractName {
        border-radius: 2px;
        background-color: #e52822;
        color: #fff;
        text-align: center;
        font-size: 12px;
        line-height: 20px;
        padding: 2px 5px
    }

    @media only screen and (max-width: 768px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ContractName {
            margin-bottom: 15px;
            padding: 0;
            font-weight: bold;
            font-size: 16px;
            color: #000;
            line-height: 20px;
            text-align: left;
            background-color: transparent
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .start_end_date {
        font-size: 16px;
        margin-bottom: 10px;
        display: inline-block
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group {
        float: right;
        width: 110px;
        height: 30px
    }

    @media only screen and (max-width: 360px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group {
            width: 90px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group .number-button {
        border: 1px solid #d2d6de;
        background-color: #fff;
        border-radius: 1px;
        width: 36px;
        padding: 4px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group .number-button .fa {
        color: #4f4f4f;
        font-size: 13px
    }

    @media only screen and (max-width: 360px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group .number-button {
            width: 36px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-group .number-detail {
        float: left;
        font-size: 14px;
        font-weight: 300;
        padding: 4px 0;
        border-top: 1px solid #d2d6de;
        border-bottom: 1px solid #d2d6de;
        min-width: 38px;
        text-align: center
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-action {
        width: 161px;
        height: 30px;
        border-radius: 4px;
        background-color: #f79321;
        padding: 2px 4px 4px 4px;
        font-size: 16px
    }

    @media only screen and (max-width: 414px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .btn-action {
            width: 100%;
            height: 44px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .text-detail .width-70 {
        width: 75px;
        display: inline-block
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body p {
        font-size: 12px;
        color: #828282
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .child-ages {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        -moz-font-feature-settings: "liga" on
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .child-ages .child-ages__item {
        display: flex;
        padding: 5px 5px 5px 0
    }

    @media only screen and (min-width: 320px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .child-ages .child-ages__item {
            width: calc(100% / 5)
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv {
        padding-left: 0px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .labelPrice {
        padding-top: 20px;
        display: inline-block
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .labelPrice i {
        color: #ffbd00;
        margin-right: 5px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .price {
        color: #ffbd00;
        font-size: 26px;
        font-weight: bold
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .price .tourItemCurrency {
        font-size: 13px;
        font-weight: normal
    }

    @media only screen and (max-width: 767px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .labelPrice {
            padding-top: 10px
        }

        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv .price {
            float: right
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox {
        display: block;
        position: relative;
        padding-left: 22px;
        margin-bottom: 0;
        margin: 10px auto 10px auto;
        cursor: pointer;
        font-size: 14px;
        font-weight: normal;
        user-select: none;
        color: #555863;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox .ls-specialPrice {
        color: #00c1de;
        float: right;
        font-size: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 13px;
        width: 13px;
        background-color: #ddd;
        border-radius: 2px
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox input:checked~.checkmark {
        background-color: #003C71
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        left: 4px;
        top: 1px;
        width: 5px;
        height: 9px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .ivivuPoint-checkbox input:checked~.checkmark:after {
        display: block
    }

    @media only screen and (max-width: 414px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .form-group {
            margin: 0 15px
        }
    }

    @media only screen and (max-width: 414px) {
        .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel-default .panel-collapse .panel-body .priceDiv {
            margin-bottom: 5px
        }
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .panel-group .panel+.panel {
        margin-top: 0
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .loadMore-departure {
        color: #003c71;
        font-size: 16px;
        text-align: center;
        display: block;
        margin: 15px auto
    }

    .tourDetailContainer .tourDetailMainDiv .calendar-departure .loadMore-departure .fa-angle-down {
        font-size: 24px;
        position: absolute;
        padding-left: 5px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .tourDetailTitle {
        color: #003C71;
        font-size: 16px;
        font-weight: bold
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .recentReviews {
        font-weight: bold;
        font-size: 16px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .verticalLine {
        margin-left: 3px;
        border-left: 1px solid #26BED6;
        line-height: 10px;
        padding: 1px 8px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .review-image-wrap {
        max-height: 90px;
        overflow: hidden
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .replyReviewContent {
        font-style: italic;
        font-size: 14px;
        margin-top: 10px;
        background: #f4f4f4;
        padding: 15px;
        border-radius: 6px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewHeader span.scoreSpan {
        border-radius: 5px;
        padding: 10px 15px;
        color: #FFFFFF;
        background-color: #9FC43A;
        font-size: 18px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewHeader span.scoreStatus {
        font-size: 16px;
        font-weight: bold;
        color: #26BED6
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewHeader span.scoreReviewQuantity {
        font-size: 12px;
        color: #26BED6
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail .horizontalLine {
        border-bottom: 1px solid #ddd;
        margin: 8px 0px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail .customerReviewName {
        color: #333;
        font-weight: bold
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreSpan {
        border-radius: 3px;
        padding: 3px 5px 2px 5px;
        color: #FFFFFF;
        background-color: #9FC43A;
        font-size: 13px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreStatus {
        font-size: 13px;
        font-weight: bold;
        color: #26BED6
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreReviewDate {
        font-size: 12px;
        color: #CDCCCB;
        margin-left: 10px
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .customerReviewDetailContainer .customerReviewDetail .customerReviewContent {
        font-style: italic
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery {
        margin-top: 4px;
        max-width: 960px;
        overflow: hidden;
        padding: 0
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery li {
        float: left;
        width: 84px;
        height: 84px;
        overflow: hidden;
        margin: 2px;
        cursor: pointer
    }

    @media screen and (max-width: 768px) {
        .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery li {
            width: calc(100%/3.14)
        }
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery li img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery .overlay-text {
        -webkit-transform: translate(0, -100%);
        -ms-transform: translate(0, -100%);
        transform: translate(0, -100%);
        font-size: 12px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        font-weight: bold;
        text-align: center
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery .overlay-text span {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery .overlay-text span.desc-img {
        visibility: visible
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery .hover {
        opacity: 0;
        transition: .3s ease;
        font-weight: normal
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .user-img-gallery .hover:hover {
        opacity: 1
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .more-img {
        display: none
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .htdt-rev-showmore {
        display: block;
        text-align: center
    }

    .tourDetailContainer .tourDetailMainDiv .customerReview .htdt-rev-showmore .htdt-rev-showmore-btn {
        border: 1px solid #2574A9;
        display: inline-block;
        margin-top: 15px;
        padding: 8px 30px;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px
    }

    .ivivu-slider-overlay {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0.91;
        filter: alpha(opacity=91);
        z-index: 99;
        display: none
    }

    .ivivu-slider {
        position: fixed;
        width: 100%;
        z-index: 199;
        display: none;
        top: 50% !important;
        left: 50% !important;
        -webkit-transform: translateY(-50%, -50%);
        -ms-transform: translateY(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .ivivu-slider .ivivu-slider_in {
        position: relative;
        text-align: center
    }



    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .ivivu-slider_close {
            right: 10px
        }
    }

    .ivivu-slider .ivivu-slider_in img {
        max-height: calc(100vh - 200px)
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in img {
            max-width: 100%
        }
    }

    .ivivu-slider .ivivu-slider_in .view-description {
        position: absolute;
        color: white;
        bottom: 15px;
        display: table;
        margin: 0 auto;
        width: 100%;
        font-size: 16px;
        text-shadow: 1px 1px black
    }

    .ivivu-slider .ivivu-slider_in .prev,
    .ivivu-slider .ivivu-slider_in .next {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        cursor: pointer
    }



    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .next {
            right: 5px
        }
    }


    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .prev {
            left: 5px
        }
    }

    .ivivu-slider_indicators {
        position: fixed;
        left: 0;
        bottom: 15px;
        width: 100%;
        z-index: 299;
        height: 84px;
        text-align: center;
        display: none
    }

    /* 
    .ivivu-slider_indicators .horizal-thumbnail {
        width: 1125px;
        text-align: left;
        display: inline-block;
        margin-left: -17px;
        overflow: auto
    }

    .ivivu-slider_indicators .horizal-thumbnail .thumbnail-images {
        display: inline-flex
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider_indicators .horizal-thumbnail {
            width: 100%
        }
    } */

    .ivivu-slider_indicators img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    .ivivu-slider_indicators a {
        display: inline-block;
        width: 84px;
        height: 84px;
        margin: 6px 4px 0px 0px;
        box-shadow: 0 0 2px #000;
        filter: alpha(opacity=50);
        opacity: 0.5;
        overflow: hidden;
        text-align: center
    }

    .ivivu-slider_indicators .current {
        filter: alpha(opacity=100);
        opacity: 1
    }

    .vspacing3 {
        margin: 3px 0px
    }

    .vspacing10 {
        margin: 10px 0px
    }

    .promotion-label {
        background: #E52822;
        color: white;
        font-size: 14px;
        padding: 5px 15px;
        font-weight: bold;
        margin-top: 30px;
        position: absolute
    }

    @media only screen and (max-width: 767px) {
        .score-container.padding-mobile {
            padding: 0 15px
        }
    }

    .wrap-navbar {
        position: relative;
        width: 100%;
        background-color: #f9fbfc;
        font-size: 16px;
        z-index: 4;
        display: none
    }

    .wrap-navbar a {
        cursor: pointer
    }

    .wrap-navbar.fixed {
        position: fixed;
        display: block;
        top: 0
    }

    @media only screen and (max-width: 767px) {
        .wrap-navbar.fixed {
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1)
        }
    }

    .wrap-navbar.fixed .nav-mask {
        position: absolute;
        left: 0;
        top: 0;
        background-color: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%
    }

    .wrap-navbar #my-navbar {
        position: relative;
        transition: all 0.3s ease-in-out
    }

    .wrap-navbar #my-navbar.navbar-collapse {
        border-top: none
    }

    .wrap-navbar #my-navbar.navbar-collapse .navbar-nav {
        margin: 0 -15px
    }

    .wrap-navbar #my-navbar.navbar-collapse .navbar-nav>li>a:hover,
    .wrap-navbar #my-navbar.navbar-collapse .navbar-nav>li>a:focus {
        background-color: #f9fbfc;
        color: #003c71
    }

    .wrap-navbar #my-navbar.navbar-collapse .navbar-nav>li.active>a span {
        position: relative;
        font-weight: bold;
        color: #26bed6
    }

    .wrap-navbar #my-navbar.navbar-collapse .navbar-nav>li.active>a span:after {
        display: none
    }

    .wrap-navbar #my-navbar.navbar-collapse .bg-navbar {
        position: fixed;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.35)
    }

    .wrap-navbar #my-navbar.fixed-m {
        transition: all 0.3s ease-in-out
    }

    .wrap-navbar #my-navbar.fixed-m .navbar-nav>li.active>a span {
        position: relative;
        font-weight: bold;
        color: #26bed6
    }

    .wrap-navbar #my-navbar.fixed-m .navbar-nav>li.active>a span:after {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: -16px;
        width: 100%;
        height: 3px;
        background-color: #26bed6
    }

    @media only screen and (max-width: 767px) {
        .wrap-navbar #my-navbar.fixed-m .navbar-nav>li.active>a span:after {
            bottom: -11px
        }
    }

    .wrap-navbar #my-navbar.fixed-m .bg-navbar {
        width: 0;
        height: 0
    }

    .wrap-navbar #my-navbar.fixed-m .nav {
        float: left;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        width: calc(100% + 100px);
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        -ms-overflow-style: none;
        transition: all 0.3s ease-in-out
    }

    .wrap-navbar #my-navbar.fixed-m .nav::-webkit-scrollbar {
        display: none
    }

    .wrap-navbar #my-navbar.fixed-m .nav>li {
        -webkit-box-flex: 0;
        flex: 0 0 auto;
        width: auto
    }

    .wrap-navbar #my-navbar.fixed-m .nav>li.last-item {
        width: 110px;
        display: inline-block
    }

    .wrap-navbar #my-navbar .nav>li.last-item {
        display: none
    }

    .wrap-navbar #my-navbar .btn-collapse {
        position: absolute;
        background-color: #f9fbfc;
        padding: 9px;
        bottom: 0px;
        right: 0px
    }

    .wrap-navbar #my-navbar .btn-collapse .icon-down {
        display: block
    }

    .wrap-navbar #my-navbar .btn-collapse .icon-up {
        display: none
    }

    .wrap-navbar #my-navbar .btn-collapse.show .icon-down {
        display: none
    }

    .wrap-navbar #my-navbar .btn-collapse.show .icon-up {
        display: block
    }

    .wrap-navbar #my-navbar .btn-collapse:after {
        content: "";
        position: absolute;
        right: 38px;
        top: 0;
        bottom: 0;
        width: 24px;
        z-index: 6;
        background-image: -webkit-gradient(linear, right top, left top, from(#f9fbfc), to(rgba(255, 255, 255, 0)));
        background-image: linear-gradient(270deg, #f9fbfc, rgba(255, 255, 255, 0))
    }

    .bg-wrap-navbar {
        height: 0
    }

    .bg-wrap-navbar.fixed {
        height: 50px
    }

    @media only screen and (min-width: 320px) {
        .tourSideBar {
            display: none
        }
    }

    @media only screen and (min-width: 480px) {
        .tourSideBar {
            display: block
        }
    }

    .tourSideBar .affix {
        top: 50px
    }

    .tourSideBar ul.nav-tabs {
        border-radius: 4px;
        z-index: 9;
        border-bottom: none;
        background: white
    }

    @media only screen and (min-width: 320px) {
        .tourSideBar ul.nav-tabs {
            width: 100%
        }
    }

    @media only screen and (min-width: 1200px) {
        .tourSideBar ul.nav-tabs {
            width: 360px
        }
    }

    .tourSideBar ul.nav-tabs li {
        margin: 0;
        border-bottom: 1px solid #F1F1F2
    }

    .tourSideBar ul.nav-tabs li:first-child {
        border-top: none
    }

    .tourSideBar ul.nav-tabs li a,
    .tourSideBar ul.nav-tabs li .scroll-content {
        color: #003C71;
        margin: 0;
        padding: 11px 15px;
        border-radius: 0px;
        border: none;
        font-size: 17px
    }

    .tourSideBar ul.nav-tabs li img {
        position: absolute;
        top: 13px;
        right: 15px;
        display: none;
        visibility: hidden
    }

    .tourSideBar ul.nav-tabs li.active a,
    .tourSideBar ul.nav-tabs li.active .scroll-content {
        font-weight: bold;
        color: #26bed6
    }

    .tourSideBar ul.nav-tabs li.active a:hover,
    .tourSideBar ul.nav-tabs li.active .scroll-content:hover {
        border: none
    }

    .tourSideBar ul.nav-tabs li.active img {
        display: block;
        visibility: visible
    }

    .tourSideBar ul.nav-tabs li .scroll-content {
        cursor: pointer
    }

    .tourSideBar .tour-services {
        background: #fff;
        border-radius: 4px;
        padding: 15px 15px 5px;
        font-size: 16px
    }

    .tourSideBar .tour-services .tourServiceItem {
        padding-bottom: 10px
    }

    @media only screen and (min-width: 1200px) {
        .tourSideBar .tour-services {
            width: 360px
        }
    }

    .guestUL {
        border-radius: 0px;
        padding-bottom: 0px;
        border-bottom: none
    }

    .guestUL li span {
        display: block;
        padding: 10px 10px;
        clear: both;
        color: #4E4E4E;
        white-space: nowrap;
        cursor: pointer
    }

    .guestUL li span:after {
        content: " Khách"
    }

    .guestUL li span i {
        color: transparent
    }

    .guestUL li span:hover {
        color: white;
        background-color: #0f81d7
    }

    .guestUL li.selected span {
        color: #0f81d7
    }

    .guestUL li.selected span i {
        color: #0f81d7
    }

    .guestUL li.selected span:hover {
        color: white;
        background-color: #0f81d7
    }

    .guestUL li.selected span:hover i {
        color: white
    }

    .daterangepicker.daterangepicker_custom_class table {
        border-collapse: separate;
        border-spacing: 3px
    }

    .daterangepicker.daterangepicker_custom_class table td {
        min-width: 42px;
        min-height: 42px;
        padding: 7px 10px 12px;
        position: relative
    }

    .daterangepicker.daterangepicker_custom_class table td span {
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 0;
        text-align: center;
        color: #828282;
        font-size: 10px;
        z-index: 0;
        line-height: 11px
    }

    .daterangepicker.daterangepicker_custom_class table td span.red_color {
        color: #e52822
    }

    .daterangepicker.daterangepicker_custom_class table td em {
        position: absolute;
        left: -5px;
        bottom: 19px;
        width: 52px;
        height: 0px;
        padding: 1px 0px 0px 0px;
        transform: rotate(-224deg);
        background-color: #868998
    }

    .daterangepicker.daterangepicker_custom_class table td.active.start-date.end-date.available,
    .daterangepicker.daterangepicker_custom_class table td.start-date,
    .daterangepicker.daterangepicker_custom_class table td.end-date,
    .daterangepicker.daterangepicker_custom_class table td.available {
        border-radius: 6px
    }

    .daterangepicker.daterangepicker_custom_class table td.active {
        background: #26bed6 !important;
        border: 1px #26bed6 solid !important
    }

    .daterangepicker.daterangepicker_custom_class table td.active span {
        color: #fff !important
    }

    .daterangepicker.daterangepicker_custom_class table td.available {
        color: #3f3b3b;
        border: 1px #ccc solid
    }

    .daterangepicker.daterangepicker_custom_class table td.available.green_color {
        color: #9fc43a;
        border: 1px #9fc43a solid
    }

    .daterangepicker.daterangepicker_custom_class table td.available.green_color span {
        color: #9fc43a
    }

    .daterangepicker.daterangepicker_custom_class table td.available.red_color {
        color: #e52822;
        border: 1px #e52822 solid
    }

    .daterangepicker.daterangepicker_custom_class table td.available.red_color span {
        color: #e52822
    }

    .daterangepicker.daterangepicker_custom_class table td.available:hover,
    .daterangepicker.daterangepicker_custom_class table td.available:focus {
        border-radius: 6px !important;
        background: #26bed6 !important;
        border: 1px #26bed6 solid !important;
        color: #fff !important
    }

    .daterangepicker.daterangepicker_custom_class table td.available:hover span,
    .daterangepicker.daterangepicker_custom_class table td.available:focus span {
        color: #fff !important
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off {
        color: #3f3b3b
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.green_color,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.green_color {
        color: #9fc43a;
        border: 1px #9fc43a solid
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.green_color span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.green_color span {
        color: #9fc43a
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.red_color,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.red_color {
        color: #e52822;
        border: 1px #e52822 solid
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.red_color span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.red_color span {
        color: #e52822
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off:hover,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off:focus,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.active,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off:hover,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off:focus,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.active {
        background: #26bed6 !important;
        border: 1px #26bed6 solid !important
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off:hover span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off:focus span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.active span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off:hover span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off:focus span,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.active span {
        color: #fff !important
    }

    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(1).weekend.off.disabled,
    .daterangepicker.daterangepicker_custom_class table td:nth-last-child(2).weekend.off.disabled {
        color: #868998 !important
    }

    .daterangepicker.daterangepicker_custom_class table td.off.disabled {
        color: #868998 !important
    }

    .daterangepicker.daterangepicker_custom_class .calendar.left.single {
        padding: 0px !important;
        box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.15)
    }

    .daterangepicker.daterangepicker_custom_class .single .calendar-table {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px
    }

    .daterangepicker.daterangepicker_custom_class .single .note-calenda {
        padding: 10px 15px;
        background: #fff;
        color: #9fc43a;
        text-align: right;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        font-style: oblique;
        position: relative
    }

    .daterangepicker.daterangepicker_custom_class .single .note-calenda hr {
        margin-top: -5px;
        margin-bottom: 15px
    }

    .daterangepicker.daterangepicker_custom_class .single .note-calenda span {
        display: block;
        color: #3f3b3b
    }

    .daterangepicker.daterangepicker_custom_class .single .note-calenda span.green_color {
        color: #9fc43a
    }

    .daterangepicker.daterangepicker_custom_class .single .note-calenda span.red_color {
        color: #e52822
    }

    @media only screen and (max-width: 767px) {
        .daterangepicker.daterangepicker_custom_class .single {
            padding: 6px !important
        }
    }

    @media only screen and (max-width: 768px) {
        .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s
        }

        .slideOut {
            -webkit-animation-name: slideOut !important;
            animation-name: slideOut !important;
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s
        }

        @-webkit-keyframes slideIn {
            from {
                bottom: -400px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -400px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes slideOut {
            from {
                bottom: 0;
                opacity: 1
            }

            to {
                bottom: -400px;
                opacity: 0
            }
        }

        @keyframes slideOut {
            from {
                bottom: 0;
                opacity: 1
            }

            to {
                bottom: -400px;
                opacity: 0
            }
        }

        .daterangepicker.daterangepicker_custom_class .single .note-calenda {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100vw;
            border-radius: 0px
        }
    }

    .tourRelatedContainer .panel-group .panel-default>.panel-heading {
        font-size: 24px;
        color: #3f3b3b;
        background-color: #f9fbfc;
        font-weight: bold;
        padding: 20px 15px 10px
    }

    .tourRelatedContainer .panel-group .panel-default .panel-collapse>.panel-body {
        border-top: 0px solid #ddd;
        background-color: #f9fbfc;
        padding: 0px 15px 15px
    }

    .tourRelatedContainer .cardItem {
        padding-bottom: 0px
    }

    @media only screen and (min-width: 320px) {
        .tourRelatedContainer .cardItem {
            margin-bottom: 15px
        }
    }

    @media only screen and (min-width: 768px) {
        .tourRelatedContainer .cardItem {
            margin-bottom: 0px
        }
    }

    @media only screen and (min-width: 320px) {
        .tourRelatedContainer .row {
            display: block
        }

        .tourRelatedContainer .row>div {
            display: block;
            justify-content: space-between
        }

        .tourRelatedContainer .row .cardItem {
            display: block
        }

        .tourRelatedContainer .row .cardItem a {
            display: block
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer {
            display: block
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent {
            display: block
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div {
            display: block
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div .cardItemTourNameDiv {
            display: block
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div .transportDiv {
            display: block
        }
    }

    @media only screen and (min-width: 350px) {

        .tourRelatedContainer .row.container:before,
        .tourRelatedContainer .row.container:after,
        .tourRelatedContainer .row.row:before,
        .tourRelatedContainer .row.row:after {
            content: normal
        }

        .tourRelatedContainer .row {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourRelatedContainer .row>div {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .tourRelatedContainer .row .cardItem {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourRelatedContainer .row .cardItem a {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            flex-direction: column;
            justify-content: flex-end
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            justify-content: flex-start
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            justify-content: flex-start;
            flex-direction: column
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div .cardItemTourNameDiv {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourRelatedContainer .row .cardItem .cardItemContainer .cardItemContent>div .transportDiv {
            display: block
        }
    }

    @media only screen and (max-width: 767px) {
        .tourRelatedContainer .row.item-m {
            scroll-behavior: smooth;
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 0 15px;
            scrollbar-width: none;
            -ms-overflow-style: none
        }

        .tourRelatedContainer .row.item-m::-webkit-scrollbar {
            display: none
        }

        .tourRelatedContainer .row.item-m>div {
            flex: 0 0 auto;
            padding: 0;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            width: 310px
        }

        .tourRelatedContainer .row.item-m>div:last-child {
            margin-right: 0
        }
    }

    @media only screen and (max-width: 767px) and (max-width: 375px) {
        .tourRelatedContainer .row.item-m>div {
            width: 290px
        }
    }

    .readMoreTours {
        font-size: 12px;
        top: 3px;
        position: relative
    }

    .affix-bottom {
        position: absolute
    }

    @media only screen and (min-width: 320px) {
        .likeButton {
            position: relative;
            top: 3px;
            float: none
        }
    }

    @media only screen and (min-width: 480px) {
        .likeButton {
            float: right
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        footer {
            padding-bottom: 30px
        }
    }

    .loader,
    .loader:before,
    .loader:after {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: load7 1.8s infinite ease-in-out;
        animation: load7 1.8s infinite ease-in-out
    }

    .loader {
        color: #00467e;
        font-size: 10px;
        margin: 80px auto;
        position: relative;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
        display: none
    }

    .loader:before,
    .loader:after {
        content: '';
        position: absolute;
        top: 0
    }

    .loader:before {
        left: -3.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s
    }

    .loader:after {
        left: 3.5em
    }

    @-webkit-keyframes load7 {

        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em
        }

        40% {
            box-shadow: 0 2.5em 0 0
        }
    }

    @keyframes load7 {

        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em
        }

        40% {
            box-shadow: 0 2.5em 0 0
        }
    }

    .jssor_1 {
        position: relative;
        top: 0px;
        left: 0px;
        width: 750px;
        height: 500px;
        overflow: hidden
    }

    .jssor_1 .wrap-img {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 750px;
        height: 420px;
        overflow: hidden;
        touch-action: pan-x
    }

    .jssor_1 .wrap-img .caption-image {
        position: absolute;
        top: 360px;
        left: 0;
        width: auto;
        height: 60px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.4), transparent);
        color: white;
        font-size: 16px;
        text-shadow: 1px 1px black;
        line-height: 60px;
        text-align: center
    }

    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    .jssora106 {
        display: block;
        position: absolute;
        cursor: pointer
    }

    .jssora106.arrowleft {
        width: 55px;
        height: 55px;
        top: 162px;
        left: 30px
    }

    .jssora106.arrowright {
        width: 55px;
        height: 55px;
        top: 162px;
        right: 30px
    }

    .jssora106 .svg-arrow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .jssora106 .c {
        fill: #fff;
        opacity: .3
    }

    .jssora106 .a {
        fill: none;
        stroke: #000;
        stroke-width: 350;
        stroke-miterlimit: 10
    }

    .jssora106:hover .c {
        opacity: .5
    }

    .jssora106:hover .a {
        opacity: .8
    }

    .jssora106.jssora106dn .c {
        opacity: .2
    }

    .jssora106.jssora106dn .a {
        opacity: 1
    }

    .jssora106.jssora106ds {
        opacity: .3;
        pointer-events: none
    }

    .jssort101 {
        position: absolute;
        left: 0px;
        bottom: 0px;
        width: 750px;
        height: 80px
    }

    .jssort101 .p {
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        background: #000;
        width: 72px;
        height: 72px
    }

    .jssort101 .p .cv {
        position: relative;
        top: 0;
        left: 0;
        width: 65%;
        height: 100%;
        box-sizing: border-box;
        z-index: 1
    }

    .jssort101 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
        visibility: hidden
    }

    .jssort101 .p:hover .cv,
    .jssort101 .p.pdn .cv {
        border: none;
        border-color: transparent
    }

    .jssort101 .p:hover {
        padding: 2px
    }

    .jssort101 .p:hover .cv {
        background-color: #000;
        opacity: .35
    }

    .jssort101 .p:hover.pdn {
        padding: 0
    }

    .jssort101 .p:hover.pdn .cv {
        background: none;
        opacity: .35
    }

    .jssort101 .pav .cv {
        border-color: #fff;
        opacity: .35
    }

    .jssort101 .pav .a,
    .jssort101 .p:hover .a {
        visibility: visible
    }

    .jssort101 .t {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        opacity: .6
    }

    .jssort101 .pav .t,
    .jssort101 .p:hover .t {
        opacity: 1
    }

    .messenger-icon {
        display: block;
        width: 55px;
        position: fixed;
        bottom: 15px;
        right: 20px;
        z-index: 99
    }

    .messenger-icon img {
        width: 55px
    }

    @media only screen and (max-width: 767px) {
        .messenger-icon {
            bottom: 65px
        }
    }

    

    .hidden {
        display: none !important;
        z-index: 99;
    }

    .visible {
        display: block !important;
    }
</style>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body class="skin-blue layout-top-nav">

    <div class="wrapper" style="width: 100%;">



        <!-- Full Width Column -->
        <div class="content-wrapper" style="min-height: 267px;">

            <div class="content-wrapper" style="min-height: 363px;">
                <!-- search -->

                <div class=" container tour-list-search-container" data-display="false" style="display: none">
                    <div class="col-xs-12 no-padding ">
                        <div class="col-xs-12 search-form tour-list">
                            <div class="row main-search-form" data-display="false">
                                <!-- desktop -->
                                <div
                                    class="col-xs-12 col-md-4 no-padding-r md-margin-bottom-15 typeahead-container search-fullframe">
                                    <div class="col-xs-12 v_field no-padding" id="typeAHeadDiv">
                                        <div class="v_field__icon-container" style="position:absolute"><i
                                                class="icon margin-left-15 ico-ic_location"></i></div>
                                        <div class="v_field__content " id="LocationContent"
                                            style="position:absolute;padding-left:40px;width:100%"
                                            onclick="TriggerSearch();">
                                            <p class="v_field__text" id="TourDepartLocation">Tour Thái Lan 5N4Đ: Bangkok
                                                - Pattaya -
                                                Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông</p>
                                            <p class="v_field__description vcolor-primary" style="color:#003C71"
                                                id="TourCount"></p>
                                        </div>
                                        <div style="width:100%;" class="hidden" id="SearchContent">
                                            <span class="twitter-typeahead"
                                                style="position: relative; display: inline-block;"><input type="text"
                                                    class="form-control v_field__input search-input typeahead tt-hint"
                                                    maxlength="200" readonly="" autocomplete="off" spellcheck="false"
                                                    tabindex="-1" dir="ltr"
                                                    style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0);"><input
                                                    type="text"
                                                    class="form-control v_field__input search-input typeahead tt-input"
                                                    name="search-home-text" id="search-home-text" maxlength="200"
                                                    placeholder="Bạn muốn đi đâu?" autocomplete="off" spellcheck="false"
                                                    dir="auto"
                                                    style="position: relative; vertical-align: top; background-color: transparent;">
                                                <pre aria-hidden="true"
                                                    style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                                <div class="tt-menu"
                                                    style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                                                    <div class="tt-dataset tt-dataset-locas"></div>
                                                    <div class="tt-dataset tt-dataset-popularLocation"></div>
                                                </div>
                                            </span>
                                            <input type="hidden" class="form-control v_field__input search-input"
                                                name="tour-type" id="tour-type" value="">
                                            <input type="hidden" class="form-control v_field__input search-input"
                                                name="tour-link" id="tour-link" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-3 no-padding-r md-margin-bottom-15 dates"
                                    id="dates">
                                    <div class="col-xs-12 no-padding date">
                                        <div class="col-xs-12 v_field">
                                            <div class="v_field__icon-container">
                                                <span class="icon ico-ic_date"></span>
                                            </div>
                                            <div class="v_field__content">
                                                <p class="v_field__text" id="DateOfWeekCheckinStr">Thứ ba</p>
                                                <p class="v_field__description" id="DateCheckinStr">13-08-2024</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 no-padding invisible-date-container">
                                            <label readonly="" type="text"
                                                class="v_field__input dates-date invisible-date-picker" id="dates-date"
                                                value="11-11-2017">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-3 no-padding-r md-margin-bottom-15 departure"
                                    id="departure">
                                    <div class="col-xs-12 no-padding">
                                        <div class="col-xs-12 v_field">
                                            <div class="v_field__icon-container">
                                                <i class="icon ico-ic_departure"></i>
                                            </div>
                                            <div class="v_field__content">
                                                <p class="v_field__text">Khởi hành từ</p>
                                                <p class="v_field__description" id="DepartLocation">Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 no-padding departure-container">
                                            <label readonly="" type="text"
                                                class="v_field__input departure departure-location"
                                                id="departure-location" value="Hồ Chí Minh"></label>
                                        </div>
                                        <div class="col-xs-12 departure-popover" data-display="false"
                                            style="display: none">
                                            <div class="col-xs-12 departure-popover__inner" id="departure-list">
                                                <div style="display: none" class="departure-header-mb">
                                                    <div class="drag-handle"></div>
                                                    <div class="departure-title-mb">
                                                        Khởi hành từ:
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hồ Chí Minh">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hồ Chí Minh</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Nha Trang">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Nha Trang</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hà Nội">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hà Nội</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Cần Thơ">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Cần Thơ</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Đà Lạt">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Đà Lạt</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Đà Nẵng">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Đà Nẵng</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Phú Quốc">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Phú Quốc</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Côn Đảo">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Côn Đảo</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Thái Lan">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Thái Lan</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Singapore">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Singapore</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Malaysia">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Malaysia</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hội An">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hội An</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Huế">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Huế</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Phú Yên">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Phú Yên</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Quy Nhơn">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Quy Nhơn</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hạ Long">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hạ Long</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Nhật Bản">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Nhật Bản</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hàn Quốc">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hàn Quốc</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Hồng Kông">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Hồng Kông</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Dubai">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Dubai</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Pháp">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Pháp</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Đức">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Đức</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Mỹ">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Mỹ</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Châu Âu">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Châu Âu</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Đài Loan">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Đài Loan</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Mộc Châu">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Mộc Châu</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Sydney">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Sydney</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Quảng Bình">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Quảng Bình</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Ninh Thuận">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Ninh Thuận</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Canada">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Canada</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Cao Bằng">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Cao Bằng</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Bình Thuận">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Bình Thuận</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Lào Cai">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Lào Cai</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Úc">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Úc</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Anh">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Anh</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Thượng Hải">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Thượng Hải</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Kuala Lumpur">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Kuala Lumpur</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 departure-popover__item">
                                                    <div class="col-xs-12 departure-popover__location no-padding handleBarsDepartureLocationItem"
                                                        data-location="Rome">
                                                        <div class="media-body media-middle">
                                                            <h4 class="media-heading">Rome</h4>
                                                            <span class="vcolor-primary"></span>
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <button class="btn btn-action btn-block  search-form-button btn-big">
                                        <b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end seach -->
                <div class="wrap-navbar">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-collapse fixed-m" id="my-navbar">
                                <ul class="nav navbar-nav">
                                    <li class="detail-overview" data-activecontent="tour-overview"><a><span>Tổng
                                                quan</span></a>
                                    </li>
                                    <li class="detail-schedule" data-activecontent="tour-schedule">
                                        <a>
                                            <span>Chương trình tour</span>
                                        </a>
                                    </li>
                                    <li class="detail-departure" data-activecontent="tour-departure"><a><span>Lịch khởi
                                                hành</span></a></li>
                                    <li class="detail-visainfo" data-activecontent="tour-visainfo"><a><span>Thông tin
                                                Visa</span></a></li>
                                    <li class="detail-tourguide" data-activecontent="tour-tourguide">
                                        <a>
                                            <span>Hướng dẫn viên</span>
                                        </a>
                                    </li>
                                    <li class="detail-term-regulations" data-activecontent="tour-term-regulations">
                                        <a><span>Chi tiết
                                                giá</span></a>
                                    </li>
                                    <li class="detail-review" data-activecontent="tour-review"><a><span>Đánh giá của
                                                khách
                                                hàng</span></a></li>
                                    <li class="visible-xs last-item"></li>
                                </ul>
                                <div class="bg-navbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wrap-navbar"></div>
                <div class="container">
                    <!-- Content Header (Page header) -->
                    <div class="breadcrumbs-container">

                        <div class="breadcrumb">

                            <span>

                                <a style="" href="<?= site_url() ?>"><i class="fa fa-home"></i> Trang chủ</a>

                            </span>

                            <svg class="fa-chevron-right" viewBox="0 0 24 24" width="1em" height="1em">

                                <path d="M7.4 5.65l6.4 6.4-6.4 6.3 1.4 1.4 7.8-7.7-7.8-7.8-1.4 1.4z"></path>

                            </svg>

                            <a href="" class="breadcrumb_last" aria-current="page">Tour Thái Lan 5N4Đ: Bangkok - Pattaya - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông</a>

                        </div>
                    </div>
                    <section class="content no-padding">
                        <div class="col-xs-12 no-padding">
                            <h1 class="pageTitle vcolor-primary v-margin-top-0 v-margin-bottom-15"><b>Tour Thái Lan
                                    5N4Đ: Bangkok -
                                    Pattaya - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông</b></h1>
                            <div class="score-container v-margin-bottom-15 padding-mobile">

                                <span class="score-container__inner" data-toggle="tooltip" title=""
                                    data-original-title="Click để xem đánh giá">
                                    <span class="score">9.2</span>
                                    <span class="score-description">Tuyệt vời </span>
                                    <span>5 đánh giá <i class="fa fa-angle-down"></i></span>
                                    <span class="hidden-xs">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="visible-xs-inline-block">&nbsp;&nbsp;</span>
                                </span>
                                <span>Mã Tour: <b>TO2479</b></span>
                            </div>
                            <div class="row">
                                <div
                                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lg-push-8 col-md-push-8 sideBarContent">
                                    <div class="col-xs-12 no-padding tourSideBar" id="tourSideBar">
                                        <div class="tourFormPrice">
                                            <div id="tourSideBarUL" class="affix-top" style="">
                                                <ul class="nav nav-tabs nav-stacked v-margin-bottom-10 z3">
                                                    <li style="border-bottom:none;">
                                                        <div class="row">
                                                            <div class="col-xs-12 desktop-booking-form"
                                                                id="desktop-booking-form">
                                                                <div class="col-xs-12 floatBox highlight">
                                                                    <div class="col-xs-12 no-padding title">Lịch Trình
                                                                        và Giá Tour
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding v-margin-bottom-10 call-now hidden">
                                                                        Đặt ngay, chỉ 2 phút. Hoặc gọi <a
                                                                            href="tel:02839338002">(028) 3933 8002</a>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding v-margin-bottom-10 select-depart-date">
                                                                        Chọn Lịch Trình và Xem Giá:</div>
                                                                    <div class="col-xs-12 wrapper-depart-date">
                                                                        <div class="left" style="margin-bottom: 0px;">
                                                                            <ul class="ls-date">
                                                                                <li class="item box-white active"
                                                                                    data-departdate="2024-08-17">17/08
                                                                                </li>
                                                                                <li class="item box-white"
                                                                                    data-departdate="2024-09-04">04/09
                                                                                </li>
                                                                                <li class="item box-white"
                                                                                    data-departdate="2024-09-07">07/09
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="right">
                                                                            <div class="form-group box-white">
                                                                                <div class="date-input-group">
                                                                                    <i class="fa fa-calendar-o"></i>
                                                                                    <label readonly="" type="text"
                                                                                        class="form-control date-input dates-date btn-general DateCheckinField"
                                                                                        value="11-11-2017"><span
                                                                                            class="DateCheckinText">Tất
                                                                                            cả</span></label>
                                                                                    <input type="hidden"
                                                                                        class="get_date"
                                                                                        value="2024-08-17">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 box-white">
                                                                        <span class="text-detail">
                                                                            <span class="width-70 hadsub">Người lớn<span
                                                                                    class="sub">&gt; 10
                                                                                    tuổi</span></span>
                                                                        </span>
                                                                        <span
                                                                            class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                            class="RateAdultAvg price-color"> x
                                                                            6.850.000</span>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn number-button minus-adult btn-general">
                                                                                <i class="fa fa-minus"></i>
                                                                            </button>
                                                                            <span
                                                                                class="number-detail number-adult">2</span>
                                                                            <button type="button"
                                                                                class="btn number-button plus-adult btn-general">
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 box-white group-child">
                                                                        <span class="text-detail">
                                                                            <span class="width-70 hadsub">Trẻ em<span
                                                                                    class="sub">2
                                                                                    - 10 tuổi</span></span>
                                                                        </span>
                                                                        <span
                                                                            class="SpecialRateChildAvg SpecialRateChild1Avg price-color hide-class"></span><span
                                                                            class="RateChildAvg RateChild1Avg price-color hide-class"></span>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn number-button minus-child btn-general">
                                                                                <i class="fa fa-minus"></i>
                                                                            </button>
                                                                            <span
                                                                                class="number-detail number-child">0</span>
                                                                            <button type="button"
                                                                                class="btn number-button plus-child btn-general">
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-12 box-white group-infant">
                                                                        <span class="text-detail">
                                                                            <span class="width-70 hadsub">Trẻ nhỏ<span
                                                                                    class="sub">&lt; 2
                                                                                    tuổi</span></span>
                                                                        </span>
                                                                        <span
                                                                            class="SpecialRateChildAvg SpecialRateChildInfantAvg price-color hide-class"></span><span
                                                                            class="RateChildAvg RateChildInfantAvg price-color hide-class"></span>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn number-button minus-infant btn-general">
                                                                                <i class="fa fa-minus"></i>
                                                                            </button>
                                                                            <span
                                                                                class="number-detail number-infant">0</span>
                                                                            <button type="button"
                                                                                class="btn number-button plus-infant btn-general">
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 showMsgPrice">
                                                                        <img class="ico-showPrice ico-0 hidden" src="">
                                                                        <img class="ico-showPrice ico-1" src="">
                                                                        <img class="ico-showPrice ico-2 hidden" src="">
                                                                        <img class="ico-showPrice ico-3 hidden" src="">
                                                                        <span>Liên hệ để xác nhận chỗ</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                        <span style="color:#ffbd00;">Chỗ cuối cùng đã
                                                                            được đặt vui
                                                                            lòng chọn ngày khác</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                        <div class="col-xs-6 no-padding"><span
                                                                                class="text-left">&nbsp;</span></div>
                                                                        <div class="col-xs-6 no-padding text-right">
                                                                            <span class="price-text">&nbsp;</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12  no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                        <div class="col-xs-7 no-padding">
                                                                            <span class="text-left">Phụ thu phòng
                                                                                đơn</span>
                                                                        </div>
                                                                        <div class="col-xs-5 no-padding text-right">
                                                                            <span class="price-color">0 VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12  no-padding v-margin-bottom-10 priceDiv">
                                                                        <span class="price-ota hide-class hidden">Giá
                                                                            gốc</span>
                                                                        <span
                                                                            class="price-line price-line-detail hidden"></span>

                                                                        <span class="lblPrice">Tổng Giá Tour</span>
                                                                        <span class="price totalPrice">13.700.000 <span
                                                                                class="tourItemCurrency">VND</span></span>
                                                                        <span class="lblnote"></span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding v-margin-bottom-15 showCancelPolicy hide-class">
                                                                        <span>Không hoàn hũy</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding v-margin-bottom-15 commistionRate hide-class">
                                                                        <div class="col-xs-7 no-padding">
                                                                            <span>Commission</span>
                                                                        </div>
                                                                        <div class="col-xs-5 no-padding text-right">
                                                                            <span class="price-commisson">0 VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                        <label class="ivivuPoint-checkbox">
                                                                            <span class="specialName"></span>
                                                                            <span class="specialPrice"></span>
                                                                            <input type="checkbox"
                                                                                class="select-special-rate">
                                                                            <span class="checkmark"></span>
                                                                            <input type="hidden"
                                                                                class="SpecialTotalRate">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-12 no-padding wrap-supplement">
                                                                        <div class="ls-supplement">

                                                                        </div>
                                                                        <input type="hidden" class="note_supplement"
                                                                            value="">
                                                                        <input type="hidden" class="JsonSurchargeFee"
                                                                            value="[]">
                                                                    </div>
                                                                    <div class="col-xs-12 no-padding scroll-mobile">
                                                                        <div class="form-group no-margin">
                                                                            <label class="visible-sm">&nbsp;</label>
                                                                            <div class="col-xs-6 btn-left">
                                                                                <div
                                                                                    class="col-xs-12 no-padding advise-Button">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block adviseButton" id="adviseButton">Liên
                                                                                        hệ tư vấn</button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6 btn-right">
                                                                                <div
                                                                                    class="col-xs-12 no-padding check-Button hide-class">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                        giá</button>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-12 no-padding request-Button">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block requestButton" id="bookTourBtn"> Đặt

                                                                                        Tour ngay</a></button>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-12 no-padding request-disable-Button hide-class">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block requestdisableButton"
                                                                                        disabled=""><a href="#"> Đặt

                                                                                            Tour ngay</a></button>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-12 no-padding book-Button hide-class">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                        Tour Ngay</button>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-12 no-padding processing-Button hide-class">
                                                                                    <button
                                                                                        class="btn btn-flat btn-action btn-md btn-block processingButton"
                                                                                        disabled="">Đang xử lý</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div
                                                                        class="member-point check-point member-point__sidebar">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                <div class="tour-services v-margin-bottom-10 hidden-xs">
                                                    <div class="row tourService">
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Bảo hiểm</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Bữa ăn</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Hướng dẫn
                                                                viên</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Khách sạn
                                                                4-5*</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Miễn Visa</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Vé máy bay</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Vé tham
                                                                quan</span>
                                                        </div>
                                                        <div class="col-xs-6 tourServiceItem">
                                                            <span><img class="" data-src="<?php site_url() ?>/public/images/service-check.svg" src=""> Xe đưa đón</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs nav-stacked v-margin-bottom-15 hidden"
                                                    id="event-scroll-content">
                                                    <li data-activecontent="tour-overview">
                                                        <div class="scroll-content">Tổng quan</div><img class="lazy"
                                                            data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-schedule">
                                                        <div class="scroll-content">
                                                            <span>Chương trình tour</span>
                                                        </div><img class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-departure">
                                                        <div class="scroll-content">Lịch khởi hành</div><img
                                                            class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-visainfo">
                                                        <div class="scroll-content">Thông tin Visa</div><img
                                                            class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-tourguide">
                                                        <div class="scroll-content">
                                                            <span>Hướng dẫn viên</span>
                                                        </div><img class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-term-regulations">
                                                        <div class="scroll-content">Chi tiết giá</div><img class="lazy"
                                                            data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-review">
                                                        <div class="scroll-content">Đánh giá của khách hàng</div><img
                                                            class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                    <li data-activecontent="tour-tailor" class="tag-tailor-tour">
                                                        <div class="scroll-content">Trải nghiệm theo cách của bạn</div>
                                                        <img class="lazy" data-src="" alt="arrow next active">
                                                    </li>
                                                </ul>
                                                <div class="bg-shadow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-pull-4 col-md-pull-4 mainContent">
                                    <div class="col-xs-12 no-padding tourHeaderContainer v-margin-bottom-30">
                                        <div class="col-xs-12 no-padding padding-mobile">
                                            <div class="tourHeaderCover2 jssor_1 " id="jssor_1" data-jssor-slider="1"
                                                style="width: 100%; height: 450px; visibility: visible;">
                                                <div style="display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 420px;">
                                                    <div class="swiper mySwiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img data-u="image"
                                                                    src="//cdn2.ivivu.com/2024/02/28/17/ivivu-nakhon-nayok-canh-dep-cheo-thuyen-long-klang-750x420.jpg"
                                                                    title="Ngồi thuyền phao trên sông Long Klang"
                                                                    border="0"
                                                                    data-events="auto" data-display="block">
                                                                <div data-u="caption" class="caption-image"
                                                                    style="z-index: 1;" data-events="auto"
                                                                    data-display="block">Ngồi thuyền phao trên
                                                                    sông Long Klang</div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img data-u="image"
                                                                    src="//cdn2.ivivu.com/2023/06/30/15/ivivu-the-sky-gallery.jpg"
                                                                    title="Ngồi thuyền phao trên sông Long Klang"
                                                                    border="0"
                                                                    data-events="auto" data-display="block">
                                                                <div data-u="caption" class="caption-image"
                                                                    style="z-index: 1;" data-events="auto"
                                                                    data-display="block">Ngồi thuyền phao trên
                                                                    sông Long Klang</div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img data-u="image"
                                                                    src="//cdn2.ivivu.com/2023/06/30/15/ivivu-tran-bao-phat-son-khao-chee-chan.jpg"
                                                                    title="Ngồi thuyền phao trên sông Long Klang"
                                                                    border="0"
                                                                    data-events="auto" data-display="block">
                                                                <div data-u="caption" class="caption-image"
                                                                    style="z-index: 1;" data-events="auto"
                                                                    data-display="block">Ngồi thuyền phao trên
                                                                    sông Long Klang</div>
                                                            </div>

                                                        </div>
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Thumbnail Navigator -->

                                            <!-- Arrow Navigator -->


                                        </div>
                                        <div class="ribbonContainerOuter">
                                            <div class="ribbonContainerInner" style=" margin-bottom: 30px; ">
                                                <span class="v-ribbon">
                                                    <h1>💥 Giảm Thêm 500K/nhóm 2 🔥 <label class="price-hot"> |
                                                            6.850k/khách</label></h1>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="row tourHeaderInfo belowCover ">
                                            <div class="col-xs-12">

                                                <span class="v-margin-right-30"><i
                                                        class="glyphicon glyphicon-map-marker"></i>Hồ
                                                    Chí Minh</span><br class="visible-xs">
                                                <span class="v-margin-right-30 timeName"
                                                    data-timename="5 Ngày 4 Đêm"><i
                                                        class="glyphicon glyphicon-time"></i>5 Ngày 4 Đêm</span>
                                                <span class="v-margin-right-30 transports">
                                                    Phương tiện:

                                                    <i class="fa icon-plane" data-toggle="tooltip" title=""
                                                        data-original-title="Di chuyển bằng Máy bay"></i>
                                                    <i class="fa icon-bus" data-toggle="tooltip" title=""
                                                        data-original-title="Di chuyển bằng Ô tô"></i>
                                                    <i class="fa icon-boat" data-toggle="tooltip" title=""
                                                        data-original-title="Di chuyển bằng Xuồng chèo"></i>
                                                </span>
                                                <span class="data-transport"
                                                    data-transport="Máy bay, Ô tô, Xuồng chèo"></span>
                                                <br>
                                                <span class="v-margin-right-30 tourNote hidden"><i
                                                        class="glyphicon glyphicon-file"></i><span
                                                        class="tourNoteContent">Giá
                                                        không áp dụng giai đoạn Lễ,Tết.</span></span>
                                                <a class="tourHeaderTourOrganization" href="">
                                                    <a class="tourHeaderTourOrganization" href="">
                                                        <a class="tourHeaderTourOrganization" href="">
                                                            <span><img src=""> <b <span><img src=""> <b <span><img
                                                                            src=""> <b
                                                                            class="organization-abbreviation">Golden
                                                                            Smile Travel</b> <img src=""> <b
                                                                            class="organization-star">4.7</b> <span
                                                                            class="organization-number">(41)</span></span>
                                                        </a>

                                            </div>
                                        </div>
                                    </div>
                                    <section class="htdt-extend col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                                        <article class="htdt-youtube stopped" data-ytbid="8qyhpVsSqyE"
                                            data-tourname="Tour Thái Lan 5N4Đ: Bangkok - Pattaya - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông">
                                            <div class="htdt-ythumb">
                                                <div class="htdt-ywrap">
                                                    <img src="//img.youtube.com/vi/8qyhpVsSqyE/default.jpg"
                                                        alt="Tour Thái Lan 5N4Đ: Bangkok - Pattaya - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông">
                                                    <i class="sprites icn-youtube"></i>
                                                </div>
                                            </div>
                                            <div class="htdt-ycont">
                                                <span class="htdt-ybadges">chỉ có tại NEMTRAVEL.vn</span>
                                                <h2 class="v-margin-top-10">Video về <span>Tour Thái Lan 5N4Đ:
                                                        Bangkok - Pattaya
                                                        - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven
                                                        Sông</span></h2>
                                            </div>
                                        </article>
                                    </section>
                                    <div class="col-xs-12 countTourBooking24H">Đã có 2 khách đặt trong 24h qua</div>
                                    <div class="col-xs-12 no-padding vspacingbottom15 note-foragent hidden">
                                        <div
                                            class="bs-callout bs-callout-primary bs-callout-bordered no-background">
                                            <h4>Ghi chú nội bộ</h4>
                                            <p class="v-margin-bottom-30">- Đơn vị liên kết: Golden Smile Travel -
                                                <span style="color:#ff0808">Số điện thoại: 0837 96 3979 SDT Mr
                                                    Huy</span>
                                            </p>
                                            <p style="text-align: justify;"><strong>Giảm 500K cho nhóm 2 khách trên
                                                    tổng BK (trừ
                                                    Commission).</strong></p>
                                            <p style="text-align: justify;"><strong>Giá web chưa giảm.</strong></p>
                                            <p style="text-align: justify;"><strong>các chuyến&nbsp;bay dự
                                                    kiến:</strong></p>
                                            <p>VU121 SGN BKK 13:20 14:50</p>
                                            <p>VU120 BKK SGN 16:10 17:50</p>
                                            <p>-----------------</p>
                                            <p>VJ801 SGN-BKK 08:35 - 10:05</p>
                                            <p>VJ802 BKK-SGN 11:30 - 13:00</p>
                                            <p style="text-align: justify;">- Về Hải Sản trong bữa ăn:&nbsp;Thái Lan
                                                có biển
                                                nhưng các món hải sản ở Thái đa số là dùng đều là hải sản đông lạnh
                                                nên sẽ không
                                                tươi.</p>
                                        </div>
                                    </div>


                                    <!-- booking mobile -->
                                    <div class="col-xs-12">

                                        <div class="col-xs-12 no-padding mobile-booking-form  v-margin-bottom-10 hidden tourFormPrice"
                                            id="mobile-booking-form">
                                            <div class="wrap-header-booking">

                                                <span class="title">Lịch Trình và Giá Tour</span>
                                                <!-- <img class="lazy btn-back-tour" data-src="<?= site_url() ?>/public/images/messenger-icon.svg"> -->
                                                <button class="btn-back-tour">NEXT</button>

                                            </div>
                                            <div class="col-xs-12 floatBox highlight">
                                                <h3 class="mobile-booking-title"><b>Tour Thái Lan 5N4Đ: Bangkok -
                                                        Pattaya - Vườn
                                                        Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông</b></h3>
                                                <div class="col-xs-12 no-padding v-margin-bottom-5 call-now hidden">
                                                    Đặt ngay,
                                                    chỉ 2 phút. Hoặc gọi <a href="tel:02839338002">(028) 3933
                                                        8002</a></div>
                                                <div
                                                    class="col-xs-12 no-padding v-margin-bottom-10 select-depart-date">
                                                    Chọn
                                                    Lịch Trình và Xem Giá:</div>
                                                <div class="col-xs-12 wrapper-depart-date">
                                                    <div class="left" style="margin-bottom: 0px;">
                                                        <ul class="ls-date">
                                                            <li class="item box-white active"
                                                                data-departdate="2024-08-17">17/08
                                                            </li>
                                                            <li class="item box-white" data-departdate="2024-
                                                            <li class=" item box-white" data-departdate="2024-09-07">
                                                                07/09</li>
                                                        </ul>
                                                    </div>09-04">
                                                    04/09</li>
                                                    <div class="right">
                                                        <div class="form-group box-white">
                                                            <div class="date-input-group">
                                                                <i class="fa fa-calendar-o"></i>
                                                                <label readonly="" type="text"
                                                                    class="form-control date-input dates-date btn-general DateCheckinField"
                                                                    value="11-11-2017"><span
                                                                        class="DateCheckinText">Tất
                                                                        cả</span></label>
                                                                <input type="hidden" class="get_date"
                                                                    value="2024-08-17">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 box-white">
                                                    <span class="text-detail">
                                                        <span class="width-70 hadsub">Người lớn<span
                                                                class="sub">&gt; 10
                                                                tuổi</span></span>
                                                    </span>
                                                    <span
                                                        class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                        class="RateAdultAvg price-color"> x 6.850.000</span>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn number-button minus-adult btn-general">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <span class="number-detail number-adult">2</span>
                                                        <button type="button"
                                                            class="btn number-button plus-adult btn-general">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 box-white group-child">
                                                    <span class="text-detail">
                                                        <span class="width-70 hadsub">Trẻ em<span class="sub">2 - 10
                                                                tuổi</span></span>
                                                    </span>
                                                    <span
                                                        class="SpecialRateChildAvg SpecialRateChild1Avg price-color hide-class"></span><span
                                                        class="RateChildAvg RateChild1Avg price-color hide-class"></span>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn number-button minus-child btn-general">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <span class="number-detail number-child">0</span>
                                                        <button type="button"
                                                            class="btn number-button plus-child btn-general">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 box-white group-infant">
                                                    <span class="text-detail">
                                                        <span class="width-70 hadsub">Trẻ nhỏ<span class="sub">&lt;
                                                                2
                                                                tuổi</span></span>
                                                    </span>
                                                    <span
                                                        class="SpecialRateChildAvg SpecialRateChildInfantAvg price-color hide-class"></span><span
                                                        class="RateChildAvg RateChildInfantAvg price-color hide-class"></span>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn number-button minus-infant btn-general">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <span class="number-detail number-infant">0</span>
                                                        <button type="button"
                                                            class="btn number-button plus-infant btn-general">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 showMsgPrice">
                                                    <img class="ico-showPrice ico-0 hidden" src="">
                                                    <img class="ico-showPrice ico-0 hidden" src="">
                                                    <img class="ico-showPrice ico-0 hidden" src="">
                                                    <img class="ico-showPrice ico-1" src="">
                                                    <img class="ico-showPrice ico-1" src="">
                                                    <img class="ico-showPrice ico-1" src="">
                                                    <img class="ico-showPrice ico-2 hidden" src="">
                                                    <span>Liên hệ để xác nhận chỗ</span>
                                                </div>
                                                <div
                                                    class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                    <span style="color:#ffbd00;">Chỗ cuối cùng đã được đặt vui lòng
                                                        chọn ngày
                                                        khác</span>
                                                </div>
                                                <div
                                                    class="col-xs-12 no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                    <div class="col-xs-6 no-padding"><span
                                                            class="text-left">&nbsp;</span></div>
                                                    <div class="col-xs-6 no-padding text-right"><span
                                                            class="price-text">&nbsp;</span></div>
                                                </div>
                                                <div
                                                    class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                    <div class="col-xs-7 no-padding">
                                                        <span class="text-left">Phụ thu phòng đơn</span>
                                                    </div>
                                                    <div class="col-xs-5 no-padding text-right">
                                                        <span class="price-color">0 VND</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  no-padding v-margin-bottom-10 priceDiv">
                                                    <span class="price-ota hide-class hidden">Giá gốc</span>
                                                    <span class="price-line price-line-detail hidden"></span>

                                                    <span class="lblPrice">Tổng Giá Tour</span>
                                                    <span class="price totalPrice">13.700.000 <span
                                                            class="tourItemCurrency">VND</span></span>
                                                </div>
                                                <div
                                                    class="col-xs-12 no-padding v-margin-bottom-15 showCancelPolicy hide-class">
                                                    <span>Không hoàn hũy</span>
                                                </div>
                                                <div
                                                    class="col-xs-12 no-padding v-margin-bottom-15 commistionRate hide-class">
                                                    <div class="col-xs-7 no-padding">
                                                        <span>Commission</span>
                                                    </div>
                                                    <div class="col-xs-5 no-padding text-right">
                                                        <span class="price-commisson">0 VND</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                    <label class="ivivuPoint-checkbox">
                                                        <span class="specialName"></span>
                                                        <span class="specialPrice"></span>
                                                        <input type="checkbox" class="select-special-rate">
                                                        <span class="checkmark"></span>
                                                        <input type="hidden" class="SpecialTotalRate">
                                                    </label>
                                                </div>
                                                <div class="col-xs-12 no-padding wrap-supplement">
                                                    <div class="ls-supplement">

                                                    </div>
                                                    <input type="hidden" class="note_supplement" value="">
                                                    <input type="hidden" class="JsonSurchargeFee" value="[]">
                                                </div>
                                                <div class="col-xs-12 fixed-btn-moble scroll-mobile">
                                                    <div class="form-group no-margin">
                                                        <label class="visible-sm">&nbsp;</label>
                                                        <div class="col-xs-6 btn-left">
                                                            <div class="col-xs-12 no-padding advise-Button">
                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block adviseButton" id="adviseButton">Liên
                                                                    hệ tư vấn</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 btn-right">
                                                            <div
                                                                class="col-xs-12 no-padding check-Button hide-class">
                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                    giá</button>
                                                            </div>
                                                            <div class="col-xs-12 no-padding request-Button">

                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block requestButton"><a href="#2"> Đặt

                                                                        Tour ngay</a></button>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 no-padding request-disable-Button hide-class">
                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block requestdisableButton" id="bookTourBtn"
                                                                    disabled="">Đặt Tour ngay</button>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 no-padding book-Button hide-class">
                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                    Tour Ngay</button>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 no-padding processing-Button hide-class">
                                                                <button
                                                                    class="btn btn-flat btn-action btn-md btn-block processingButton"
                                                                    disabled="">Đang xử lý</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="member-point check-point member-point__sidebar">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="bg-shadow"></div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-overview">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding" id="tour-overview">
                                                    <h3 class="tourDetailheadLine vcolor-primary">
                                                        <div class="fb-like fb_iframe_widget"
                                                            data-href="https://www.ivivu.com/du-lich/tour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song/2479"
                                                            data-href="https://www.ivivu.com/du-lich/tour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song/2479"
                                                            data-href="https://www.ivivu.com/du-lich/tour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song/2479"
                                                            data-layout="button" data-action="like"
                                                            data-size="small" data-show-faces="true"
                                                            data-share="true" style="float:right"
                                                            fb-xfbml-state="rendered"
                                                            fb-iframe-plugin-query="action=like&amp;app_id=628025334278848&amp;container_width=0&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small">
                                                            <span
                                                                style="vertical-align: bottom; width: 120px; height: 28px;"><iframe
                                                                    name="fd7bc8e1ec0672c85" width="1000px"
                                                                    height="1000px"
                                                                    data-testid="fb:like Facebook Social Plugin"
                                                                    title="fb:like Facebook Social Plugin"
                                                                    frameborder="0" allowtransparency="true"
                                                                    allowfullscreen="true" scrolling="no"
                                                                    allow="encrypted-media"
                                                                    src="https://www.facebook.com/v10.0/plugins/like.php?action=like&amp;app_id=628025334278848&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffb2250cfb8931749%26domain%3Dwww.ivivu.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.ivivu.com%252Ff940cb5b87d878798%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"
                                                                    style="border: none; visibility: visible; width: 120px; height: 28px;"
                                                                    class=""></iframe></span>
                                                        </div>
                                                        Bangkok - Pattaya - Nakhon Nayok
                                                    </h3>
                                                    <div class="col-xs-12 tourScheduleContainer">
                                                        <div class="tourSchedule">
                                                            <p>Khám phá Thái Lan 5 ngày 4 đêm với hành trình qua
                                                                Bangkok và
                                                                Pattaya. Tham quan các điểm nổi bật tại Bangkok như
                                                                Cung điện
                                                                Hoàng gia, chùa Phật Ngọc và chùa Bình Minh. Tại
                                                                Pattaya, ghé
                                                                thăm vườn nhiệt đới Nong Nooch với những màn biểu
                                                                diễn văn hóa
                                                                đặc sắc và khám phá Lâu đài Tỷ Phú xa hoa. Thưởng
                                                                thức ẩm thực
                                                                đa dạng và mua sắm tại các khu chợ nổi tiếng. Đặc
                                                                biệt, trải
                                                                nghiệm nghỉ dưỡng 1 đêm tại resort ven sông với
                                                                không gian thư
                                                                giãn và phong cảnh đẹp. Tour lý tưởng cho gia đình
                                                                và du khách
                                                                muốn tận hưởng và khám phá văn hóa Thái Lan. Cùng
                                                                NEMTRAVEL khám phá
                                                                ngay hôm nay!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-schedule">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding" id="tour-schedule">
                                                    <h3 class="tourDetailheadLine vcolor-primary">
                                                        <label class="v-margin-bottom-0">Chương trình tour</label>
                                                    </h3>
                                                    <div class="col-xs-12 tourScheduleContainer">
                                                        <div class="tourSchedule">
                                                            <h3 style="text-align: justify;">NGÀY 1: SÀI GÒN -
                                                                BANGKOK - PATTAYA
                                                                (Ăn tối)</h3>
                                                            <p>Sáng trưởng đoàn đón quý khách tại sân bay Quốc Tế
                                                                Tân Sơn Nhất,
                                                                làm thủ tục đáp chuyến bay đi Bangkok.</p>
                                                            <p>Đến sân bay, xe đưa đoàn tham quan&nbsp;Thành Phố
                                                                Biển Pattaya.
                                                            </p>
                                                            <p><strong>The Sky Gallery&nbsp;</strong>- Quán café
                                                                ngoài trời nằm
                                                                trên đồi Pratamnak với view biển nhìn ra toàn cảnh
                                                                vịnh Pattaya
                                                                và đảo Koh Larn.&nbsp;Đặc biệt, Công ty tặng Quý
                                                                khách voucher
                                                                100 Baht để thưởng thức các món thức uống hấp dẫn
                                                                tại đây.</p>
                                                            <p><em>(Nếu trường hợp thời tiết xấu thì sẽ đoàn chuyển
                                                                    đổi sang
                                                                    check in House of Benedict Pattaya)</em></p>
                                                            <p style="text-align: center;"><img title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2023/06/30/15/ivivu-the-sky-gallery.jpg"
                                                                    alt=""
                                                                    src="//cdn2.ivivu.com/2023/06/30/15/ivivu-the-sky-gallery.jpg">
                                                            </p>
                                                            <p style="text-align: center;"><em>The Sky Gallery với
                                                                    view biển ấn
                                                                    tượng.</em></p>
                                                            <p>Đoàn dùng bữa tối tại nhà hàng địa phương, nhận phòng
                                                                khách sạn
                                                                và tự do khám phá Pattaya.</p>
                                                            <p>Qúy khách có thể tham gia “The Amazing Night of
                                                                Pattaya” gồm
                                                                chuỗi show diễn cực kỳ độc đáo (Chi phí tự túc).</p>
                                                            <h3>Ngày 2: Pattaya - City Tour (Ăn sáng, trưa,
                                                                tối)&nbsp;</h3>
                                                            <p>Đoàn dùng buffet sáng tại khách sạn. Khởi hành tham
                                                                quan:</p>
                                                            <p><strong>Trân Bảo Phật Sơn</strong>&nbsp;- Ngọn núi
                                                                Phật Vàng độc
                                                                đáo với hình tượng Đức Phật dược khắc laser thẳng
                                                                vào núi và dát
                                                                vàng tổng số lượng vàng lên tới 999kg 24k.</p>
                                                            <p style="text-align: center;"><img title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2023/06/30/15/ivivu-tran-bao-phat-son-khao-chee-chan.jpg"
                                                                    alt=""
                                                                    src="//cdn2.ivivu.com/2023/06/30/15/ivivu-tran-bao-phat-son-khao-chee-chan.jpg">
                                                            </p>
                                                            <p style="text-align: center;"><em>Trân Bảo Phật Sơn -
                                                                    Phật vàng
                                                                    khổng lồ uy nghiêm.</em></p>
                                                            <p><strong>Modern Latex</strong>&nbsp;- Trung tâm nghiên
                                                                cứu giấc
                                                                ngủ Hoàng Gia Thái Lan.</p>
                                                            <p>Đoàn dùng&nbsp;bữa trưa tại nhà hàng địa phương.</p>
                                                            <p><strong>Nong Nooch Garden&nbsp;</strong>- Một trong
                                                                những khu
                                                                vườn nhiệt đới lớn nhất Đông Nam Á.</p>
                                                            <p style="text-align: center;"><em><img title=""
                                                                        class=""
                                                                        data-src="//cdn2.ivivu.com/2022/07/11/11/ivivu-cong-vien-nong-nooch.gif"
                                                                        alt=""
                                                                        src="//cdn2.ivivu.com/2022/07/11/11/ivivu-cong-vien-nong-nooch.gif"></em>
                                                            </p>
                                                            <p style="text-align: center;"><em>Nong Nooch Garden -
                                                                    Khu vườn
                                                                    nhiệt đới rộng lớn.</em></p>
                                                            <p style="text-align: left;"><strong>Lâu Đài Tỷ
                                                                    Phú</strong> - Baan
                                                                Sukhawadee tráng lệ nguy nga bên bờ biển được mô
                                                                phỏng theo cung
                                                                điện Versailles của Pháp.</p>
                                                            <p style="text-align: center;"><em><img title=""
                                                                        class=""
                                                                        data-src="//cdn2.ivivu.com/2017/04/20/17/ivivu-lau-dai-ti-phu-baan-sukhawadee-o-pataya.jpg"
                                                                        alt=""
                                                                        src="//cdn2.ivivu.com/2017/04/20/17/ivivu-lau-dai-ti-phu-baan-sukhawadee-o-pataya.jpg"></em>
                                                            </p>
                                                            <p style="text-align: center;"><em>Lâu đài tỷ phú Thái
                                                                    Lan - Vẻ đẹp
                                                                    xa hoa trong từng chi tiết.</em></p>
                                                            <p>Tham quan<strong>&nbsp;Tiger Hurb&nbsp;</strong>và
                                                                trải nghiệm
                                                                bắn súng tại trường bắn quân đội ở đây (tự túc).</p>
                                                            <p><strong>Lâu Đài Tỷ Phú</strong>&nbsp;- Baan
                                                                Sukhawadee tráng lệ
                                                                nguy nga bên bờ biển được mô phỏng theo cung điện
                                                                Versailles của
                                                                Pháp.</p>
                                                            <p>Đòa dùng bữa tối buffet tại Lâu Đài Tỷ Phú và thưởng
                                                                thức biểu
                                                                diễn, sau đó tham quan Công Viên Ánh Sáng và xem
                                                                Muay Thái.</p>
                                                            <p><img title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2024/02/28/16/ivivu-tran-dau-muay-thai-.jpg"
                                                                    alt=""
                                                                    src="//cdn2.ivivu.com/2024/02/28/16/ivivu-tran-dau-muay-thai-.jpg">
                                                            </p>
                                                            <p style="text-align: center;"><em>Hòa vào không khí
                                                                    cuồng nhiệt của
                                                                    trận đấu Muay Thái.</em></p>
                                                            <p style="text-align: left;">Sau đó xe đưa đoàn về khách
                                                                sạn nghỉ
                                                                ngơi.</p>
                                                            <h3>Ngày 3: Pattaya - Nakhon - Trải Nghiệm Resort Ven
                                                                Sông&nbsp;( Ăn
                                                                sáng, trưa lẩu Suki, tối)</h3>
                                                            <p>Đoàn dùng buffet sáng tại khách sạn, trả phòng. Khởi
                                                                hành
                                                                đi&nbsp;Nakhon Nayok.</p>
                                                            <p><strong>Trung tâm&nbsp;nghiên cứu rắn độc&nbsp;Hoàng
                                                                    gia&nbsp;Thái La</strong>n - Xem xiếc và tìm
                                                                hiểu các loại
                                                                thuốc rắn dùng trị bệnh.</p>
                                                            <p><strong>Trung tâm&nbsp;World Gem&nbsp;</strong>- Với
                                                                hàng nghìn
                                                                loại đá quý khác nhau, được xây dựng bởi Hoàng Gia
                                                                Thái Lan.</p>
                                                            <p>Đoàn dùng bữa trưa với Lẩu Suki tự chọn.</p>
                                                            <p>Chiều tham quan&nbsp;<strong>Thành phố
                                                                    ngầm&nbsp;Nakhon
                                                                    Nayok</strong>&nbsp;-&nbsp;Wat
                                                                Maniwong&nbsp;ngắm nhìn hang
                                                                động Rắn Thần Naga tráng lệ với rất nhiều tượng thần
                                                                rắn.</p>
                                                            <p style="text-align: center;"><img title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2023/03/17/16/ivivu-chua-wat-maniwong.gif"
                                                                    alt=""
                                                                    src="//cdn2.ivivu.com/2023/03/17/16/ivivu-chua-wat-maniwong.gif">
                                                            </p>
                                                            <p style="text-align: center;"><em>Wat Maniwong tráng lệ
                                                                    với Rắn
                                                                    Thần Naga.</em></p>
                                                            <p style="text-align: left;"><strong>Trải nghiệm thuyền
                                                                    phao trên
                                                                    sông Long Klang</strong> đầy thơ mộng và yên
                                                                bình.&nbsp;</p>
                                                            <p style="text-align: center;"><em><img title=""
                                                                        class=""
                                                                        data-src="//cdn2.ivivu.com/2024/02/28/17/ivivu-nakhon-nayok-canh-dep-cheo-thuyen-long-klang.jpg"
                                                                        alt=""
                                                                        src="//cdn2.ivivu.com/2024/02/28/17/ivivu-nakhon-nayok-canh-dep-cheo-thuyen-long-klang.jpg"></em>
                                                            </p>
                                                            <p style="text-align: center;"><em>Thả mình trên thuyền
                                                                    phao sông
                                                                    Long Klang.</em></p>
                                                            <p>Quý khách về resort nhận phòng nghỉ ngơi và dùng cơm
                                                                tối tại nhà
                                                                hàng. Nghỉ đêm tại Nakhon Nayok.</p>
                                                            <h3>Ngày 4: Nakhon - Bangkok ( Ăn sáng, trưa)&nbsp;</h3>
                                                            <p>Sáng Quý khách Đạp xe quanh resort tận hưởng bầu
                                                                không khí trong
                                                                lành (chi phí thuê xe tự túc)</p>
                                                            <p>Đoàn dùng Buffet sáng, trả phòng.&nbsp;Xe đón đoàn
                                                                khởi hành về
                                                                Bangkok, trên đường đi tham quan:</p>
                                                            <p><strong>Wat Khao Durian</strong>&nbsp;- Tìm hiểu lịch
                                                                sử hình
                                                                thành và chiêm ngưỡng vẻ đẹp đặc với lối kiến trúc
                                                                độc đáo màu
                                                                hồng.&nbsp;</p>
                                                            <p style="text-align: center;"><img title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2024/02/28/17/ivivu-chua-hong-wat-khao-durian.jpg"
                                                                    alt=""
                                                                    src="//cdn2.ivivu.com/2024/02/28/17/ivivu-chua-hong-wat-khao-durian.jpg">
                                                            </p>
                                                            <p style="text-align: center;"><em>Wat Khao Durian với
                                                                    lối kiến trúc
                                                                    rực rỡ sắc hồng.</em></p>
                                                            <p><strong>Đập nước Khun Dan Prakan Chon</strong>&nbsp;-
                                                                Đập bê tông
                                                                nén con lăn lớn và dài nhất trên thế giới.</p>
                                                            <p style="text-align: center;"><em><img title=""
                                                                        class=""
                                                                        data-src="//cdn2.ivivu.com/2024/02/28/17/ivivu-dap-nuoc-khun-dan-prakan-chon.jpg"
                                                                        alt=""
                                                                        src="//cdn2.ivivu.com/2024/02/28/17/ivivu-dap-nuoc-khun-dan-prakan-chon.jpg"></em>
                                                            </p>
                                                            <p style="text-align: center;"><em>Đập nước Khun Dan
                                                                    Prakan
                                                                    Chon.</em></p>
                                                            <p>Đoàn dùng bữa trưa tại nhà hàng địa phương.</p>
                                                            <p>Về tới Bangkok, đoàn tự do mua sắm tại Big C hoặc các
                                                                trung tâm
                                                                thương mại lớn như Central World, Pratunam, etc,...
                                                            </p>
                                                            <p>Đoàn tự túc ăn tối, sau đó tự do tham quan hoặc trải
                                                                nghiệm các
                                                                dịch vụ giải trí về đêm. Nghỉ đêm tại Bangkok.</p>
                                                            <h3>Ngày 5: Bangkok - TP. HCM (Ăn sáng)&nbsp;</h3>
                                                            <p>Đoàn dùng bữa sáng, trả phòng.</p>
                                                            <p><strong>Viếng chùa&nbsp;Wat
                                                                    Yannawa</strong>&nbsp;(chùa Thuyền)
                                                                để cầu may mắn, sức khỏe và bình an cho gia đình và
                                                                người thân.
                                                            </p>
                                                            <p><img style="display: block; margin-left: auto; margin-right: auto;"
                                                                    title="" class=""
                                                                    data-src="//cdn2.ivivu.com/2017/04/04/17/ivivu-chua-thuyen.jpg"
                                                                    alt="" width="710" height="399"
                                                                    src="//cdn2.ivivu.com/2017/04/04/17/ivivu-chua-thuyen.jpg">
                                                            </p>
                                                            <p style="text-align: center;"><em>Chùa Wat Yannawa -
                                                                    Kiến trúc hình
                                                                    con thuyền độc đáo.</em></p>
                                                            <p>Đến giờ hẹn, Quý khách di chuyển ra sân bay, dùng bữa
                                                                ăn coupon
                                                                và làm thủ tục đáp chuyến bay về TP. HCM.</p>
                                                            <p>Đến sân bay Tân Sơn Nhất, trưởng đoàn chia tay quý
                                                                khách và hẹn
                                                                gặp lại trong các chuyến đi sau.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-departure">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding calendar-departure"
                                                    id="tour-departure">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h3 class="tourDetailheadLine vcolor-primary">Lịch khởi
                                                                hành</h3>
                                                            <div class="search-date">
                                                                <label readonly="" type="text"
                                                                    class="form-control date-input dates-date btn-general"
                                                                    id="DepartureField" value="11-11-2017"><span
                                                                        class="icon ico-ic_date"></span><span
                                                                        class="DepartureText"
                                                                        id="DepartureText">17-08-2024</span></label>

                                                                <input type="hidden" class="Getdeparture" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row title-form">
                                                        <div class="col-xs-4 col-sm-3 date-mobile item-m">Ngày khởi
                                                            hành</div>
                                                        <div class="col-xs-4 col-sm-3 hidden-xs">Ngày về</div>
                                                        <div class="visible-xs col-xs-4 price item-m">Giá</div>
                                                        <div class="col-xs-4 col-sm-2 item-m">Tình trạng chỗ</div>
                                                        <div
                                                            class="hidden-xs col-xs-4 col-sm-4 no-padding price item-m">
                                                            <span class="col-price">Giá</span>
                                                        </div>
                                                    </div>
                                                    <div class="loader" style="display: none;">Loading...</div>
                                                    <div class="list-calendar-departure">
                                                        <div class="panel-group" id="accordion" role="tablist"
                                                            aria-multiselectable="true">

                                                            <div class="panel panel-default"
                                                                style="display: block;">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-0">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-0" aria-expanded="true"
                                                                            aria-controls="collapse0">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                17/08/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                21/08/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-0"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-0">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                17/08/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                21/08/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-08-17">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default"
                                                                style="display: block;">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-1">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-1" aria-expanded="true"
                                                                            aria-controls="collapse1">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T4,
                                                                                04/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                CN,
                                                                                08/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-1"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-1">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T4,
                                                                                04/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> CN,
                                                                                08/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    7.250.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">14.500.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">14.500.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-04">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default"
                                                                style="display: block;">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-2">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-2" aria-expanded="true"
                                                                            aria-controls="collapse2">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                07/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                11/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-2"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-2">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                07/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                11/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-07">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default"
                                                                style="display: block;">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-3">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-3" aria-expanded="true"
                                                                            aria-controls="collapse3">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T2,
                                                                                09/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T6,
                                                                                13/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-3">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T2,
                                                                                09/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T6,
                                                                                13/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-09">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default"
                                                                style="display: block;">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-4">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-4" aria-expanded="true"
                                                                            aria-controls="collapse4">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T4,
                                                                                11/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                CN,
                                                                                15/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-4"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-4">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T4,
                                                                                11/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> CN,
                                                                                15/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    7.250.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">14.500.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">14.500.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-11">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-5">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-5" aria-expanded="true"
                                                                            aria-controls="collapse5">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                14/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                18/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-5"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-5">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                14/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                18/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-14">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-6">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-6" aria-expanded="true"
                                                                            aria-controls="collapse6">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T2,
                                                                                16/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T6,
                                                                                20/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-6"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-6">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T2,
                                                                                16/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T6,
                                                                                20/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-16">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-7">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-7" aria-expanded="true"
                                                                            aria-controls="collapse7">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T4,
                                                                                18/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                CN,
                                                                                22/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-7"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-7">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T4,
                                                                                18/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> CN,
                                                                                22/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    7.250.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">14.500.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">14.500.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-18">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-8">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-8" aria-expanded="true"
                                                                            aria-controls="collapse8">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                21/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                25/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-8"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-8">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                21/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                25/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-21">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-9">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-9" aria-expanded="true"
                                                                            aria-controls="collapse9">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T2,
                                                                                23/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T6,
                                                                                27/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-9"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-9">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T2,
                                                                                23/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T6,
                                                                                27/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-23">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-10">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-10" aria-expanded="true"
                                                                            aria-controls="collapse10">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T4,
                                                                                25/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                CN,
                                                                                29/09/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price red_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    7.250.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-10"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-10">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T4,
                                                                                25/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> CN,
                                                                                29/09/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    7.250.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">14.500.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">14.500.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-25">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-11">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-11" aria-expanded="true"
                                                                            aria-controls="collapse11">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                28/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                02/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-11"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-11">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                28/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                02/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-28">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-12">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-12" aria-expanded="true"
                                                                            aria-controls="collapse12">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T2,
                                                                                30/09/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T6,
                                                                                04/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-12"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-12">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T2,
                                                                                30/09/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T6,
                                                                                04/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-09-30">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-13">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-13" aria-expanded="true"
                                                                            aria-controls="collapse13">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                05/10/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                09/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-13"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-13">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                05/10/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                09/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-10-05">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-14">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-14" aria-expanded="true"
                                                                            aria-controls="collapse14">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T3,
                                                                                08/10/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T7,
                                                                                12/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-14"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-14">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T3,
                                                                                08/10/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T7,
                                                                                12/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-10-08">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-15">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-15" aria-expanded="true"
                                                                            aria-controls="collapse15">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                12/10/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                16/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-15"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-15">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                12/10/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                16/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-10-12">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading flag_bg btn-heading"
                                                                    role="tab" id="heading-16">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-16" aria-expanded="true"
                                                                            aria-controls="collapse16">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T7,
                                                                                19/10/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T4,
                                                                                23/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-16"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-16">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T7,
                                                                                19/10/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T4,
                                                                                23/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-10-19">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading  btn-heading" role="tab"
                                                                    id="heading-17">
                                                                    <h4 class="row panel-title">
                                                                        <a class="collapsed" data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse-17" aria-expanded="true"
                                                                            aria-controls="collapse17">
                                                                            <img class="arrow-next" src=""
                                                                                alt="Xem giá">
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 date-mobile ">
                                                                                T3,
                                                                                22/10/2024</div>
                                                                            <div
                                                                                class="col-xs-4 col-sm-3 hidden-xs">
                                                                                T7,
                                                                                26/10/2024</div>

                                                                            <div
                                                                                class="visible-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class=""><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000 đ</span>
                                                                            </div>
                                                                            <div class="col-xs-4 col-sm-2 ">Liên hệ
                                                                            </div>
                                                                            <div
                                                                                class="hidden-xs col-xs-4 price price__mobile no-padding item-total-price green_color">
                                                                                <span class="col-price"><i
                                                                                        class="fa fa-fire"></i>
                                                                                    6.850.000
                                                                                    VNĐ</span>
                                                                            </div>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-17"
                                                                    class="panel-collapse collapse hidden"
                                                                    role="tabpanel" aria-labelledby="heading-17">
                                                                    <div class="row panel-body">
                                                                        <div class="col-xs-12 col-sm-3 hidden">
                                                                            <div class="ContractName">Ngày Thường
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 visible-xs">
                                                                            <span class="start_end_date">T3,
                                                                                22/10/2024 <i
                                                                                    class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i> T7,
                                                                                26/10/2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Người
                                                                                        lớn</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateAdultAvg price-color hide-class"></span><span
                                                                                    class="RateAdultAvg price-color">
                                                                                    x
                                                                                    6.850.000</span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-adult">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-adult">2</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-adult">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15">
                                                                                <span class="text-detail">
                                                                                    <span class="width-70">Trẻ
                                                                                        em</span>
                                                                                </span>
                                                                                <span
                                                                                    class="SpecialRateChildAvg price-color hide-class"></span><span
                                                                                    class="RateChildAvg price-color"></span>
                                                                                <div class="btn-group">
                                                                                    <button type="button"
                                                                                        class="btn number-button minus-child">
                                                                                        <i class="fa fa-minus"></i>
                                                                                    </button>
                                                                                    <span
                                                                                        class="number-detail number-child">0</span>
                                                                                    <button type="button"
                                                                                        class="btn number-button plus-child">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding hide-class Age_Childs">
                                                                                <p class="v-margin-bottom-5">
                                                                                    Độ tuổi trẻ em
                                                                                </p>
                                                                                <ul class="child-ages no-padding"
                                                                                    style="list-style: none;"></ul>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
                                                                                <span style="color:#ffbd00;">Chỗ
                                                                                    cuối cùng đã
                                                                                    được đặt vui lòng chọn ngày
                                                                                    khác</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding adult-surcharge RateSurchargeAdult hide-class">
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
                                                                                <div class="col-xs-6 no-padding">
                                                                                    <span class="text-left">Phụ thu
                                                                                        phòng
                                                                                        đơn</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-5 no-padding text-right">
                                                                                    <span class="price-text">0
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12  no-padding priceDiv visible-xs">
                                                                                <div class="col-xs-5 no-padding">

                                                                                    <span class="lblPrice">Tổng Giá
                                                                                        Tour</span>
                                                                                </div>
                                                                                <div class="col-xs-7 no-padding">
                                                                                    <span
                                                                                        class="price totalPrice">13.700.000
                                                                                        VND</span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding specialrate-wrap-inner hide-class">
                                                                                <label class="ivivuPoint-checkbox">
                                                                                    <span
                                                                                        class="specialName"></span>
                                                                                    <span
                                                                                        class="specialPrice"></span>
                                                                                    <input type="checkbox"
                                                                                        class="select-special-rate">
                                                                                    <span class="checkmark"></span>
                                                                                    <input type="hidden"
                                                                                        class="SpecialTotalRate">
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="col-xs-12 no-padding wrap-supplement">
                                                                                <div class="ls-supplement"></div>
                                                                                <input type="hidden"
                                                                                    class="note_supplement"
                                                                                    value="">
                                                                                <input type="hidden"
                                                                                    class="JsonSurchargeFee"
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="hidden-xs col-sm-3 priceDiv">
                                                                            <span
                                                                                class="price totalPrice">13.700.000
                                                                                VND</span>

                                                                            <span class="lblPrice">Tổng Giá
                                                                                Tour</span>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-3 no-padding">
                                                                            <div class="col-xs-12 no-padding">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        class="col-xs-12 no-padding request-Button">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block requestButton">Yêu
                                                                                            cầu tư vấn</button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-xs-12 no-padding check-Button hide-class">
                                                                                        <input type="hidden"
                                                                                            class="AllotmentDate"
                                                                                            value="2024-10-22">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem
                                                                                            giá</button>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-xs-12 no-padding book-Button hide-class">
                                                                                        <button
                                                                                            class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt
                                                                                            Tour</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" id="loadMore" class="loadMore-departure">Xem
                                                                thêm <i class="fa fa-angle-down"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-visainfo">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding" id="tour-visainfo">
                                                    <h3 class="tourDetailheadLine vcolor-primary">
                                                        Thông tin Visa
                                                    </h3>
                                                    <div class="col-xs-12 tourScheduleContainer">
                                                        <div class="tourSchedule">
                                                            <p>- Miễn visa cho khách mang quốc tịch Việt Nam.</p>
                                                            <p>- Hộ chiếu nguyên vẹn và còn thời hạn sử dụng&nbsp;6
                                                                tháng tính
                                                                từ ngày&nbsp;kết thúc tour.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-tourguide">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding" id="tour-tourguide">
                                                    <h3 class="tourDetailheadLine vcolor-primary">
                                                        <b>Hướng dẫn viên</b>
                                                    </h3>
                                                    <div class="col-xs-12 tourScheduleContainer">
                                                        <div class="tourSchedule">
                                                            <p>- HDV liên hệ trước khởi hành 2 -3 ngày, sắp xếp đón
                                                                và cung cấp
                                                                thông tin. HDV hỗ trợ làm thủ tục hàng không, nhận
                                                                phòng và sắp
                                                                xếp bữa ăn.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail"
                                        id="detail-term-regulations">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12" id="tour-term-regulations"></div>
                                                <div class="col-xs-12 no-padding hidden" id="tour-services">
                                                    <h3 class="tourDetailheadLine vcolor-primary">Dịch vụ đi kèm
                                                    </h3>
                                                    <div class="col-xs-12">
                                                        <div class="row tourService">
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa icon-checkmark3 text-blue"></i>
                                                                    Bảo
                                                                    hiểm</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa icon-breakfast text-blue"></i>
                                                                    Bữa ăn</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa icon-flag2 text-blue"></i> Hướng
                                                                    dẫn
                                                                    viên</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa  text-blue"></i> Khách sạn
                                                                    4-5*</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa  text-blue"></i> Miễn Visa</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa  text-blue"></i> Vé máy
                                                                    bay</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa icon-ticket2 text-blue"></i> Vé
                                                                    tham
                                                                    quan</span>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-4 tourServiceItem">
                                                                <span><i class="fa icon-bus text-blue"></i> Xe đưa
                                                                    đón</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-12 no-padding v-margin-bottom-15"
                                                    id="tour-cancellation-rules">
                                                    <h3 class="tourDetailheadLine vcolor-primary">Chi tiết giá</h3>
                                                    <div class="col-xs-12 no-padding">
                                                        <div class="tourRule">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li role="presentation" class="active">
                                                                    <a href="#tabpanel1" role="tab" id="tab1"
                                                                        data-toggle="tab" aria-controls="tabpanel1"
                                                                        aria-expanded="true"><span
                                                                            class="visible-xs">Bao gồm</span><span
                                                                            class="hidden-xs">Giá bao gồm</span></a>
                                                                </li>
                                                                <li role="presentation" class="">
                                                                    <a href="#tabpanel2" role="tab" id="tab2"
                                                                        data-toggle="tab" aria-controls="tabpanel2"
                                                                        aria-expanded="false"><span
                                                                            class="visible-xs">Phát sinh</span><span
                                                                            class="hidden-xs">Giá không bao
                                                                            gồm</span></a>
                                                                </li>
                                                                <li role="presentation" class="">
                                                                    <a href="#tabpanel3" role="tab" id="tab3"
                                                                        data-toggle="tab" aria-controls="tabpanel3"
                                                                        aria-expanded="false">Phụ
                                                                        thu</a>
                                                                </li>
                                                                <li role="presentation" class="">
                                                                    <a href="#tabpanel4" role="tab" id="tab4"
                                                                        data-toggle="tab" aria-controls="tabpanel4"
                                                                        aria-expanded="false">Hủy
                                                                        đổi</a>
                                                                </li>
                                                                <li role="presentation" class="">
                                                                    <a href="#tabpanel5" role="tab" id="tab5"
                                                                        data-toggle="tab" aria-controls="tabpanel5"
                                                                        aria-expanded="false">Lưu
                                                                        ý</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane fade active in"
                                                                    id="tabpanel1" aria-labelledby="tab1">
                                                                    <div class="col-xs-12">
                                                                        <p><strong>Vận chuyển:</strong></p>
                                                                        <p>- Vé máy bay khứ hồi SGN-BKK-SGN/ Hãng
                                                                            hàng không
                                                                            Vietravel Airlines. Bao gồm 07 kg hành
                                                                            lý xách tay
                                                                            và 20 kg hành lý ký gửi.</p>
                                                                        <p>- Xe du lịch vận chuyển theo chương trình
                                                                            tham quan
                                                                            và hướng dẫn viên địa phương theo suốt
                                                                            tuyến.</p>
                                                                        <p><strong>Lưu trú:</strong></p>
                                                                        <p>- Khách sạn lưu trú 02-03 khách/phòng,
                                                                            đầy đủ tiện
                                                                            nghi theo tiêu chuẩn 4-5 sao tiêu chuẩn
                                                                            tại Thái
                                                                            Lan:</p>
                                                                        <p>+ Tại Bangkok: Khách sạn Benrajong,
                                                                            Jazzotel, etc.
                                                                        </p>
                                                                        <p>+ Tại Pattaya: Khách sạn Crystal Palace,
                                                                            Le Bali
                                                                            Resort, etc.</p>
                                                                        <p>+ Tại Nakhon: Phusakthan Resort Nakhon
                                                                            Nayok.</p>
                                                                        <p><strong>Khác:</strong></p>
                                                                        <p>- Các bữa ăn có trong chương trình.</p>
                                                                        <p>- Vé vào cổng các điểm tham quan theo
                                                                            chương trình.
                                                                        </p>
                                                                        <p>- Phục vụ 01 chai nước suối/người/ngày.
                                                                        </p>
                                                                        <p>- Bảo hiểm du lịch với mức bồi thường cao
                                                                            nhất 10.000
                                                                            USD/vụ.</p>
                                                                        <p>- Quà tặng: Nón du lịch và túi Canvas.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade "
                                                                    id="tabpanel2" aria-labelledby="tab2">
                                                                    <div class="col-xs-12">
                                                                        <p>- Phụ thu phòng đơn: 4.000.000
                                                                            VNĐ/tour/khách.&nbsp;
                                                                        </p>
                                                                        <p>- Hộ chiếu (phải còn hạn trên 6 tháng kể
                                                                            từ ngày về
                                                                            Việt Nam).</p>
                                                                        <p>- Hoá đơn GTGT.</p>
                                                                        <p>- Phí phục vụ khi mang rượu bia, nước
                                                                            ngọt vào nhà
                                                                            hàng (nếu có).</p>
                                                                        <p>- Chi phí cá nhân (điện thoại, giặt ủi,
                                                                            nước uống
                                                                            trong mini bar...).</p>
                                                                        <p>- Các chi phí cá nhân không được đề cập
                                                                            trong mục bao
                                                                            gồm.</p>
                                                                        <p>- Thức ăn, nước uống ngoài chương trình.
                                                                        </p>
                                                                        <p>- Chi phí phục vụ Quốc tế bắt buộc: 5
                                                                            USD/khách/ngày.
                                                                        </p>
                                                                        <p>- Visa nhập cảnh Việt Nam (đối với người
                                                                            nước ngoài).
                                                                        </p>
                                                                        <p>- Visa nhập cảnh Thái Lan (đối với người
                                                                            nước ngoài).
                                                                        </p>
                                                                        <p>- Chi phí phát sinh trong trường hợp
                                                                            chuyến bay bị
                                                                            huỷ.</p>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade "
                                                                    id="tabpanel3" aria-labelledby="tab3">
                                                                    <div class="col-xs-12">
                                                                        <p>- Trẻ em dưới 02 tuổi: Tính giá&nbsp;như
                                                                            trên
                                                                            web&nbsp;phụ phí vé máy bay.</p>
                                                                        <p>-&nbsp;Trẻ em từ 2 tuổi đến dưới 11 tuổi:
                                                                            Tính
                                                                            giá&nbsp;như trên web&nbsp;dịch vụ ăn
                                                                            uống, vé tham
                                                                            quan, ghề ngồi, bảo hiểm&nbsp;(Ngủ chung
                                                                            giường
                                                                            người lớn).</p>
                                                                        <p>- Trên 11 tuổi tính vé người lớn.</p>
                                                                        <p>Hai người lớn kèm 1 bé, bé thứ 2 mua vé
                                                                            người lớn</p>
                                                                        <p>&nbsp;</p>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade "
                                                                    id="tabpanel4" aria-labelledby="tab4">
                                                                    <div class="col-xs-12">
                                                                        <p>- Hủy tour sau khi đăng ký phí phạt 60%
                                                                            tiền cọc.</p>
                                                                        <p>- Hủy tour trước 10 ngày khởi hành, khách
                                                                            chịu phí
                                                                            phạt 70% tổng giá tour.</p>
                                                                        <p>- Hủy tour trước 7 ngày khởi hành, khách
                                                                            chịu phí
                                                                            phạt 80% tổng giá tour.</p>
                                                                        <p>- Hủy tour trong vòng 5 ngày khởi hành,
                                                                            khách chịu
                                                                            phí phạt 100% giá tour.</p>
                                                                        <p>-&nbsp;Giai đoạn Lễ/Tết: không hoàn,
                                                                            không hủy, không
                                                                            đổi.</p>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade "
                                                                    id="tabpanel5" aria-labelledby="tab5">
                                                                    <div class="col-xs-12 link-unit hidden">
                                                                        <p class="v-margin-bottom-30">- Đơn vị liên
                                                                            kết: Golden
                                                                            Smile Travel.</p>
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        <p>- Quý khách mang THẺ XANH (PERMANENT
                                                                            RESIDENT),
                                                                            ALIEN’S PASSPORT, TRAVEL DOCUMENT v.v…
                                                                            nhưng KHÔNG
                                                                            CÓ PASSPORT CỦA NƯỚC CƯ TRÚ khi đăng ký
                                                                            tour không
                                                                            trình báo bị TỪ CHỐI CHECK IN HOẶC XUẤT
                                                                            NHẬP CẢNH
                                                                            công ty chúng hoàn toàn không chịu trách
                                                                            nhiệm và
                                                                            không hoàn trả tiền tour.</p>
                                                                        <p>Trong trường hợp khách quan: khủng bố,
                                                                            thiên tai…hoặc
                                                                            có sự cố làm thay đổi lịch trình của các
                                                                            phương tiện
                                                                            vận chuyển như : máy bay, tàu hỏa…thì
                                                                            Cty sẽ giữ
                                                                            quyền thay đổi lộ trình bất cứ lúc nào
                                                                            vì sự thuận
                                                                            tiện, an toàn cho khách hàng và sẽ không
                                                                            chịu trách
                                                                            nhiệm bồi thường những thiệt hại phát
                                                                            sinh.</p>
                                                                        <p>- Trường hợp khách từ 75 tuổi phải ký
                                                                            giấy xác nhận
                                                                            sức khỏe và đi kèm 1 người thân từ 18 –
                                                                            55 tuổi.</p>
                                                                        <p>- Đối với khách hàng trên 75 tuổi gia
                                                                            đình và quý
                                                                            khách phải cam kết đảm bảo tình trạng
                                                                            sức khỏe với
                                                                            Cty chúng tôi trước khi tham gia tour và
                                                                            vui long
                                                                            mua them bảo hiểm tự nguyện trị giá
                                                                            200.000
                                                                            VNĐ/khách vì lý do bảo hiểm từ chối mua
                                                                            bảo hiểm
                                                                            theo đoàn với độ tuổi này.</p>
                                                                        <p>- Trường hợp quý khách không được xuất
                                                                            cảnh hay nhập
                                                                            cảnh lý do cá nhân, công ty du lịch sẽ
                                                                            không chịu
                                                                            trách nhiệm và sẽ không hoàn trả tiền
                                                                            tour.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail" id="detail-review">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="col-xs-12 no-padding v-margin-bottom-15"
                                                    id="tour-review">
                                                    <section id="review"
                                                        class="row htdt-review clearfix customerReview">
                                                        <article
                                                            class="col-xs-12 v-margin-bottom-10  v-margin-top-15">
                                                            <p class="tourDetailTitle">Đánh giá khách hàng về Tour
                                                                Thái Lan
                                                                5N4Đ: Bangkok - Pattaya - Vườn Nong Nooch - Lâu Đài
                                                                Tỷ Phú - 1
                                                                Đêm Resort Ven Sông</p>
                                                        </article>

                                                        <div
                                                            class="col-xs-12 customerReviewHeader v-margin-bottom-10">
                                                            <span class="scoreSpan" itemprop="ratingValue"> 9.2
                                                                /10</span>
                                                            <span class="scoreStatus">Tuyệt vời</span>
                                                            <span class="scoreReviewQuantity verticalLine"><span
                                                                    itemprop="reviewCount">5</span> đánh giá</span>
                                                            <br>
                                                        </div>
                                                        <div
                                                            class="col-xs-12 vspacing15 review-image-wrap review-preload v-margin-bottom-20">
                                                            <ul class="clearfix user-img-gallery">

                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-12 vspacing10">
                                                            <span class="recentReviews">
                                                                Đánh giá gần đây
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="no-padding col-xs-12 customerReviewDetailContainer">
                                                            <div class="col-xs-12 customerReviewDetail">
                                                                <div class="horizontalLine"></div>
                                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 vspacing3 customerReviewName">
                                                                            <span
                                                                                class="glyphicon glyphicon-user"></span>
                                                                            <span> Anh Sơn</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 vspacing3">
                                                                            <span class="scoreSpan">8.0</span>
                                                                            <span class="scoreStatus">Rất tốt
                                                                            </span>
                                                                            <span
                                                                                class="scoreReviewDate">29-04-2024</span>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                            <span class="customerReviewContent">
                                                                                Nên làm thêm nhiều tour mới để khách
                                                                                cũ đi
                                                                                lại...
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                            <p class="replyReviewContent">
                                                                                Chào Anh Sơn, cảm ơn anh đã lựa chọn
                                                                                NEMTRAVEL. Công
                                                                                ty rất vui và mong được đồng hành
                                                                                cùng anh trong
                                                                                các chuyến du lịch tiếp theo ạ!
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 customerReviewDetail">
                                                                <div class="horizontalLine"></div>
                                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 vspacing3 customerReviewName">
                                                                            <span
                                                                                class="glyphicon glyphicon-user"></span>
                                                                            <span> Phan Thúy Anh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 vspacing3">
                                                                            <span class="scoreSpan">10.0</span>
                                                                            <span class="scoreStatus">Tuyệt vời
                                                                            </span>
                                                                            <span
                                                                                class="scoreReviewDate">07-12-2023</span>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                            <span class="customerReviewContent">
                                                                                Ngoại trừ menu đồ ăn đơn điệu nhưng
                                                                                cũng không
                                                                                quá tệ thì mọi thứ đều rất tuyệt
                                                                                vời, hdv chu
                                                                                đáo nhiệt tình, chương trình tour
                                                                                phù hợp và có
                                                                                sự sắp xếp linh hoạt. Gia đình mình
                                                                                hài lòng và
                                                                                sẽ còn đặt những tour tiếp theo. Cảm
                                                                                ơn NEMTRAVEL
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 customerReviewDetail">
                                                                <div class="horizontalLine"></div>
                                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 vspacing3 customerReviewName">
                                                                            <span
                                                                                class="glyphicon glyphicon-user"></span>
                                                                            <span> Phòng Minh Trí</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 vspacing3">
                                                                            <span class="scoreSpan">10.0</span>
                                                                            <span class="scoreStatus">Tuyệt vời
                                                                            </span>
                                                                            <span
                                                                                class="scoreReviewDate">19-10-2023</span>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                            <span class="customerReviewContent">

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 customerReviewDetail">
                                                                <div class="horizontalLine"></div>
                                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 vspacing3 customerReviewName">
                                                                            <span
                                                                                class="glyphicon glyphicon-user"></span>
                                                                            <span> Chị Diệu Thanh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 vspacing3">
                                                                            <span class="scoreSpan">8.0</span>
                                                                            <span class="scoreStatus">Rất tốt
                                                                            </span>
                                                                            <span
                                                                                class="scoreReviewDate">12-10-2023</span>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                            <span class="customerReviewContent">
                                                                                Tour 4 ngày thì có vài bữa ăn hơi tệ
                                                                                (cơm song,
                                                                                thực an lạnh tanh)- chọn nhà hàng dở
                                                                                quá. Có ks
                                                                                ở Pattaya không bắt được wifi 2 ngày
                                                                                luôn. Tour
                                                                                nên complain lại với đối tác chuyện
                                                                                này. Còn các
                                                                                vấn đề khác thì khá ổn. HDV dễ
                                                                                thương. Nhiệt
                                                                                tình.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 customerReviewDetail">
                                                                <div class="horizontalLine"></div>
                                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 vspacing3 customerReviewName">
                                                                            <span
                                                                                class="glyphicon glyphicon-user"></span>
                                                                            <span> Nham Tiffany</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 vspacing3">
                                                                            <span class="scoreSpan">10.0</span>
                                                                            <span class="scoreStatus">Tuyệt vời
                                                                            </span>
                                                                            <span
                                                                                class="scoreReviewDate">23-09-2023</span>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                            <span class="customerReviewContent">

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </section>
                                                    <script type="text/javascript">
                                                        var totalLoaded = "5";
                                                    </script>
                                                </div>
                                                <div class="col-xs-12 no-padding v-margin-top-30 hidden">
                                                    <div class="fb-like fb_iframe_widget"
                                                        data-href="https://www.ivivu.com/du-lich/tour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song/2479"
                                                        data-layout="button" data-action="like" data-size="small"
                                                        data-show-faces="true" data-share="true"
                                                        fb-xfbml-state="rendered"
                                                        fb-iframe-plugin-query="action=like&amp;app_id=628025334278848&amp;container_width=0&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small">
                                                        <span
                                                            style="vertical-align: bottom; width: 120px; height: 28px;"><iframe
                                                                name="f221d6883bd285eee" width="1000px"
                                                                height="1000px"
                                                                data-testid="fb:like Facebook Social Plugin"
                                                                title="fb:like Facebook Social Plugin"
                                                                frameborder="0" allowtransparency="true"
                                                                allowfullscreen="true" scrolling="no"
                                                                allow="encrypted-media"
                                                                src="https://www.facebook.com/v10.0/plugins/like.php?action=like&amp;app_id=628025334278848&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2022fafd4f19fbdd%26domain%3Dwww.ivivu.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.ivivu.com%252Ff940cb5b87d878798%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"
                                                                class=""
                                                                style="border: none; visibility: visible; width: 120px; height: 28px;"></iframe></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 no-padding v-margin-top-15 hidden">
                                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                                        data-href="https://www.ivivu.com/du-lich/tour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song/2479"
                                                        data-width="100%" data-numposts="5"
                                                        fb-xfbml-state="rendered"
                                                        fb-iframe-plugin-query="app_id=628025334278848&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v10.0&amp;width="
                                                        style="width: 100%;"><span
                                                            style="vertical-align: top; width: 100%; height: 0px; overflow: hidden;"><iframe
                                                                name="f1f47626182d86c1d" width="1000px"
                                                                height="100px"
                                                                data-testid="fb:comments Facebook Social Plugin"
                                                                title="fb:comments Facebook Social Plugin"
                                                                frameborder="0" allowtransparency="true"
                                                                allowfullscreen="true" scrolling="no"
                                                                allow="encrypted-media"
                                                                src="https://www.facebook.com/v10.0/plugins/comments.php?app_id=628025334278848&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df694346aba48a01d9%26domain%3Dwww.ivivu.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.ivivu.com%252Ff940cb5b87d878798%26relation%3Dparent.parent&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fwww.ivivu.com%2Fdu-lich%2Ftour-thai-lan-5n4d-bangkok-pattaya-vuon-nong-nooch-lau-dai-ty-phu-1-dem-resort-ven-song%2F2479&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v10.0&amp;width="
                                                                style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 tourHeaderContent panel-detail hidden" id="detail-tailor">
                                        <div class="col-xs-12 no-padding tourDetailContainer">
                                            <div class="col-xs-12 no-padding tourDetailMainDiv">
                                                <div class="row askForAdvice">
                                                    <div class="col-xs-12 bg-askForAdvice" id="tour-tailor">
                                                        <h3 class="tourDetailheadLine vcolor-primary"><span>Tailor
                                                                tour</span> -
                                                            Trải nghiệm theo cách của bạn</h3>
                                                        <div
                                                            class="col-xs-12 no-padding v-margin-bottom-15 title-request">
                                                            Thiết
                                                            kế lịch trình theo mong muốn. Đi đoàn riêng an toàn. Để
                                                            lại thông
                                                            tin chúng tôi sẽ liên lạc ngay</div>
                                                        <div class="col-xs-12 no-padding v-margin-top-45">
                                                            <div
                                                                class="col-xs-12 col-sm-6 no-padding v-margin-top-45 tourItemBook">
                                                                <div class="row wrap-inner">
                                                                    <div class="col-xs-12 v-margin-bottom-15">
                                                                        <label class="control-label">Họ Tên <span
                                                                                class="vcolor-danger"></span></label>
                                                                        <input maxlength="255" type="text"
                                                                            class="form-control " id="customer_Name"
                                                                            placeholder="">
                                                                    </div>
                                                                    <div class="col-xs-12 v-margin-bottom-15">
                                                                        <label class="control-label">Điện thoại
                                                                            <span
                                                                                class="vcolor-danger"></span></label>
                                                                        <input maxlength="100" type="text"
                                                                            class="form-control" id="customer_Phone"
                                                                            placeholder="">
                                                                    </div>
                                                                    <div class="col-xs-12 v-margin-bottom-15">
                                                                        <label class="control-label">Email (nếu
                                                                            có)<span
                                                                                class="vcolor-danger"></span></label>
                                                                        <input maxlength="100" type="text"
                                                                            class="form-control" id="customer_Email"
                                                                            placeholder="">
                                                                    </div>

                                                                    <div class="col-xs-12 v-margin-bottom-15">
                                                                        <label class="control-label">Cách bạn trải
                                                                            nghiệm</label>
                                                                        <textarea
                                                                            placeholder="Thời gian, số khách dự kiến, địa điểm yêu thích, loại hình khách sạn..."
                                                                            maxlength="1000" rows="2" cols="30"
                                                                            class="form-control"
                                                                            id="notes_reqquest"></textarea>
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        <button
                                                                            class="btn btn-flat btn-lg btn-warning btn-block vbackground-warning bookTourBottom no-border btn-AskForAdvice btn-request"
                                                                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Đặt
                                                                            Tour ngay</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-6 no-padding-right v-margin-top-45 hidden-xs">
                                                                <div class="advice-info">
                                                                    <div class="avatar"><img class="lazy"
                                                                            data-src=""
                                                                            alt="Tư vấn ngày? Gọi tổng đài"></div>
                                                                    <div class="text">Tư vấn ngay? Gọi tổng đài
                                                                    </div>
                                                                    <a class="phone" href="tel:02839338002"><i
                                                                            class="fa fa-phone"></i> (028) 3933
                                                                        8002</a>
                                                                    <div class="time">8h30 - 18h00 hàng ngày</div>
                                                                    <div class="qacode-ivivu"><img class="lazy"
                                                                            data-src="" alt="QA Code NEMTRAVEL"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="tourRelatedDiv-36"
                    class="col-xs-12 no-padding tourRelatedContainer v-margin-bottom-10">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title" style="width:100%;">
                                    <a href="">
                                        <span>Tours du lịch Thái Lan liên quan</span>
                                        <span class="readMoreTours hidden pull-right">XEM TẤT CẢ<i
                                                class="glyphicon glyphicon-chevron-right"></i></span>
                                        <span class="clearfix"></span>
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="col-xs-12 no-padding">
                                        <div class="row item-m">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="col-xs-12 cardItem">
                                                    <a href="">
                                                        <div class="col-xs-12 no-padding cardItemContainer">
                                                            <div class="col-xs-12 no-padding cardItemImage">
                                                                <div class="ribbonContainerOuter">
                                                                    <div class="ribbonContainerInner">
                                                                        <span class="v-ribbon">
                                                                            <h1>Vietnam Airlines | KS 3-4*</h1>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <figure>
                                                                    <picture>

                                                                        <img class="img-responsive"
                                                                            data-src="//cdn2.ivivu.com/2023/12/19/17/ivivu-isla-de-koh-samed-1-360x225.jpg"
                                                                            src="//cdn2.ivivu.com/2023/12/19/17/ivivu-isla-de-koh-samed-1-360x225.jpg">
                                                                    </picture>
                                                                </figure>
                                                            </div>
                                                            <div class="col-xs-12 cardItemContent">
                                                                <div class="col-xs-12 no-padding">
                                                                    <div
                                                                        class="col-xs-12 v-margin-bottom-10 cardItemTourNameDiv">
                                                                        <span class="cardItemTourName">Tour Thái
                                                                            Lan 5N4Đ:
                                                                            Khám Phá Bangkok - Rayong - Koh
                                                                            Samet -
                                                                            Pattaya</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding cardItemTourDetailDiv">
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-10 hidden-xs">
                                                                            <div class="row">
                                                                                <div class="col-xs-6">
                                                                                    <span><i class="glyphicon glyphicon-time"
                                                                                            data-toggle="tooltip"
                                                                                            title=""
                                                                                            data-original-title="Thời lượng tour"></i>
                                                                                        5 Ngày 4 Đêm </span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-6 text-right transportDiv">
                                                                                    <i class="fa icon-plane"
                                                                                        data-toggle="tooltip"
                                                                                        title=""
                                                                                        data-original-title="Di chuyển bằng Máy bay"></i><i
                                                                                        class="fa icon-bus"
                                                                                        data-toggle="tooltip"
                                                                                        title=""
                                                                                        data-original-title="Di chuyển bằng Ô tô"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-5 cardItemDepartDiv">

                                                                            <ul
                                                                                class="tourListPros list-inline">
                                                                                <li>Rayong Botanic Garden</li>
                                                                                <li>Thiên Đường Trái Cây Nhiệt
                                                                                    Đới</li>
                                                                                <li>Đảo Koh Samet</li>
                                                                                <li>Vườn Lan Nong Nooch</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xs-12 cardItemPrice">
                                                                            <div class="tourBooking24H hidden"
                                                                                data-id="2955">0 khách đặt trong
                                                                                24h qua
                                                                            </div>
                                                                            <div class="clearfix visible-xs">
                                                                            </div>
                                                                            <span
                                                                                class="price vcolor-info">8.990.000
                                                                                <small
                                                                                    class="textCurrency">VND</small></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="col-xs-12 cardItem">
                                                    <a href="">
                                                        <div class="col-xs-12 no-padding cardItemContainer">
                                                            <div class="col-xs-12 no-padding cardItemImage">
                                                                <div class="ribbonContainerOuter">
                                                                    <div class="ribbonContainerInner">
                                                                        <span class="v-ribbon">
                                                                            <h1>Vietjet Air | KS 4*</h1>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <figure>
                                                                    <picture>

                                                                        <img class="img-responsive"
                                                                            data-src="//cdn2.ivivu.com/2022/07/13/17/ivivu-vinh-phang-nga-360x225.gif"
                                                                            src="//cdn2.ivivu.com/2022/07/13/17/ivivu-vinh-phang-nga-360x225.gif">
                                                                    </picture>
                                                                </figure>
                                                            </div>
                                                            <div class="col-xs-12 cardItemContent">
                                                                <div class="col-xs-12 no-padding">
                                                                    <div
                                                                        class="col-xs-12 v-margin-bottom-10 cardItemTourNameDiv">
                                                                        <span class="cardItemTourName">Tour Cao
                                                                            Cấp Thái Lan
                                                                            4N3Đ: Khám Phá Phuket - Free Day -
                                                                            Vịnh Phang
                                                                            Nga</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding cardItemTourDetailDiv">
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-10">
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <span
                                                                                        class="score-container score-container__more">
                                                                                        <span
                                                                                            class="score">10.0</span>
                                                                                        <span
                                                                                            class="score-description">Tuyệt
                                                                                            vời </span>
                                                                                        <span> | 1 đánh giá
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-5 cardItemDepartDiv">

                                                                            <ul
                                                                                class="tourListPros list-inline">
                                                                                <li>Thạch Nhũ Vịnh Phang Nga
                                                                                </li>
                                                                                <li>Phố Cổ Phuket</li>
                                                                                <li>Chùa Hoàng Gia Kathu</li>
                                                                                <li>Patong Walking Street</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xs-12 cardItemPrice">
                                                                            <div class="tourBooking24H hidden"
                                                                                data-id="2175">0 khách đặt trong
                                                                                24h qua
                                                                            </div>
                                                                            <div class="clearfix visible-xs">
                                                                            </div>
                                                                            <span
                                                                                class="price vcolor-info">7.610.000
                                                                                <small
                                                                                    class="textCurrency">VND</small></span>
                                                                            <div class="price-line">7.680.000
                                                                                VND</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="col-xs-12 cardItem">
                                                    <a href="">
                                                        <div class="col-xs-12 no-padding cardItemContainer">
                                                            <div class="col-xs-12 no-padding cardItemImage">
                                                                <div class="ribbonContainerOuter">
                                                                    <div class="ribbonContainerInner">
                                                                        <span class="v-ribbon">
                                                                            <h1>Vietjet Air | KS 4*</h1>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <figure>
                                                                    <picture>

                                                                        <img class="img-responsive"
                                                                            data-src="//cdn2.ivivu.com/2022/04/19/11/ivivu-dao-phi-phi-360x225.gif"
                                                                            src="//cdn2.ivivu.com/2022/04/19/11/ivivu-dao-phi-phi-360x225.gif">
                                                                    </picture>
                                                                </figure>
                                                            </div>
                                                            <div class="col-xs-12 cardItemContent">
                                                                <div class="col-xs-12 no-padding">
                                                                    <div
                                                                        class="col-xs-12 v-margin-bottom-10 cardItemTourNameDiv">
                                                                        <span class="cardItemTourName">Tour Cao
                                                                            Cấp Thái Lan
                                                                            4N3Đ: Phuket - Đảo Koh Phi Phi -
                                                                            Tham Quan Phố
                                                                            Cổ</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding cardItemTourDetailDiv">
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-10">
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <span
                                                                                        class="score-container score-container__more">
                                                                                        <span
                                                                                            class="score">9.8</span>
                                                                                        <span
                                                                                            class="score-description">Tuyệt
                                                                                            vời </span>
                                                                                        <span> | 8 đánh giá
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-5 cardItemDepartDiv">

                                                                            <ul
                                                                                class="tourListPros list-inline">
                                                                                <li>Phố Cổ Phuket</li>
                                                                                <li>Đảo Phi Phi Leh</li>
                                                                                <li>Hang Động Viking</li>
                                                                                <li>Đền Chalong</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xs-12 cardItemPrice">
                                                                            <div class="tourBooking24H hidden"
                                                                                data-id="2191">0 khách đặt trong
                                                                                24h qua
                                                                            </div>
                                                                            <div class="clearfix visible-xs">
                                                                            </div>
                                                                            <span
                                                                                class="price vcolor-info">10.949.000
                                                                                <small
                                                                                    class="textCurrency">VND</small></span>
                                                                            <div class="price-line">11.490.000
                                                                                VND</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="tourHistoryDiv" class="col-xs-12 no-padding tourRelatedContainer v-margin-bottom-10">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title" style="width:100%;">
                                    <span>Tours du lịch bạn đã xem gần đây</span>
                                </h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="col-xs-12 no-padding">
                                        <div class="row item-m">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="col-xs-12 cardItem">
                                                    <a href="">
                                                        <div class="col-xs-12 no-padding cardItemContainer">
                                                            <div class="col-xs-12 no-padding cardItemImage">
                                                                <div class="ribbonContainerOuter">
                                                                    <div class="ribbonContainerInner">
                                                                        <span class="v-ribbon">
                                                                            <h1>⚡ Giảm Thêm 500k/Nhóm 2</h1>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <figure>
                                                                    <picture>

                                                                        <img class="img-responsive"
                                                                            data-src="//cdn2.ivivu.com/2024/05/30/18/shangrila-ivv-360x225.gif"
                                                                            src="//cdn2.ivivu.com/2024/05/30/18/shangrila-ivv-360x225.gif">
                                                                    </picture>
                                                                </figure>
                                                                <div class="cardItemPriceDivOuter">
                                                                    <div class="cardItemPriceDivInner">
                                                                        <span
                                                                            class="cardItemPriceAfterDiscount"><i
                                                                                class="glyphicon glyphicon-map-marker"></i>
                                                                            Trung Quốc</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 cardItemContent">
                                                                <div class="col-xs-12 no-padding">
                                                                    <div
                                                                        class="col-xs-12 v-margin-bottom-10 cardItemTourNameDiv">
                                                                        <span class="cardItemTourName">Tour
                                                                            Trung Quốc 5N4Đ:
                                                                            Lệ Giang - Shangrila - Núi Tuyết
                                                                            Ngọc Long -
                                                                            Thành Cổ Dukezong</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding cardItemTourDetailDiv">
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-10 hidden-xs">
                                                                            <div class="row">
                                                                                <div class="col-xs-6">
                                                                                    <span><i class="glyphicon glyphicon-time"
                                                                                            data-toggle="tooltip"
                                                                                            title="Thời lượng tour"></i>
                                                                                        5
                                                                                        Ngày 4 Đêm</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xs-6 text-right transportDiv">
                                                                                    <i class="fa icon-plane"
                                                                                        data-toggle="tooltip"
                                                                                        title="Di chuyển bằng Máy bay"></i>
                                                                                    <i class="fa icon-bus"
                                                                                        data-toggle="tooltip"
                                                                                        title="Di chuyển bằng Ô tô"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-5 cardItemDepartDiv">

                                                                            <ul
                                                                                class="tourListPros list-inline">
                                                                                <li>Núi Tuyết Ngọc Long</li>
                                                                                <li>Khe Hố Nhảy</li>
                                                                                <li>Tu viện Songzanlin</li>
                                                                                <li>Lam Nguyệt Cốc</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xs-12 cardItemPrice">
                                                                            <div class="tourBooking24H"
                                                                                data-id="4396">2
                                                                                khách đặt trong 24h qua</div>
                                                                            <div class="clearfix visible-xs">
                                                                            </div>
                                                                            <span
                                                                                class="price vcolor-info">18.290.000
                                                                                <small
                                                                                    class="textCurrency">VND</small></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="col-xs-12 cardItem">
                                                    <a href="">
                                                        <div class="col-xs-12 no-padding cardItemContainer">
                                                            <div class="col-xs-12 no-padding cardItemImage">
                                                                <div class="ribbonContainerOuter">
                                                                    <div class="ribbonContainerInner">
                                                                        <span class="v-ribbon">
                                                                            <h1>Trọn Gói Phòng+Bữa Ăn+Vui Chơi
                                                                            </h1>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <figure>
                                                                    <picture>

                                                                        <img class="img-responsive"
                                                                            data-src="//cdn2.ivivu.com/2023/04/11/10/ivivu-dream-cruise-360x225.gif"
                                                                            src="//cdn2.ivivu.com/2023/04/11/10/ivivu-dream-cruise-360x225.gif">
                                                                    </picture>
                                                                </figure>
                                                                <div class="cardItemPriceDivOuter">
                                                                    <div class="cardItemPriceDivInner">
                                                                        <span
                                                                            class="cardItemPriceAfterDiscount"><i
                                                                                class="glyphicon glyphicon-map-marker"></i>
                                                                            Malaysia, Singapore</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 cardItemContent">
                                                                <div class="col-xs-12 no-padding">
                                                                    <div
                                                                        class="col-xs-12 v-margin-bottom-10 cardItemTourNameDiv">
                                                                        <span class="cardItemTourName">Trải
                                                                            Nghiệm Du Lịch
                                                                            Singapore - Kuala Lumpur - Singapore
                                                                            3N2Đ Cùng
                                                                            Siêu Du Thuyền Genting Dream
                                                                            5*</span>
                                                                    </div>
                                                                    <div
                                                                        class="col-xs-12 no-padding cardItemTourDetailDiv">
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-10">
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <span
                                                                                        class="score-container score-container__more">
                                                                                        <span
                                                                                            class="score">9.2</span>
                                                                                        <span
                                                                                            class="score-description">Tuyệt
                                                                                            vời</span>
                                                                                        <span> | 12 đánh giá
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-12 v-margin-bottom-5 cardItemDepartDiv">

                                                                            <ul
                                                                                class="tourListPros list-inline">
                                                                                <li>Zipline trên đại dương</li>
                                                                                <li>Zouk Zouk Beach Club</li>
                                                                                <li>Show diễn quốc tế</li>
                                                                                <li>Ẩm thực cao cấp</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-xs-12 cardItemPrice">
                                                                            <div class="tourBooking24H hidden"
                                                                                data-id="2231">0 khách đặt trong
                                                                                24h qua
                                                                            </div>
                                                                            <div class="clearfix visible-xs">
                                                                            </div>
                                                                            <span
                                                                                class="price vcolor-info">7.130.000
                                                                                <small
                                                                                    class="textCurrency">VND</small></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section><!-- /.content -->
            </div><!-- /.container -->
        </div>

        <!--  -->
        <!-- Modal -->
        <div class="modal fade tour-modal-request" id="getBundlePriceModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog book-modal">
                <div class="modal-content" style="width: 470px;
    height: 521px;">
                    <div class="modal-body">
                        <button type="button" id="closeFormBtn" class="close close-out-side" data-dismiss="modal" aria-hidden="true">
                            <i class="vicon vicon-x-icon"></i>
                        </button>
                        <!-- Nội dung của modal -->
                        <div class="visible-xs wrap-header-request">
                            <span class="title">Yêu cầu đặt</span>
                            <img class="lazy btn-back-request" data-src="/du-lich/content/img/icon_hardware_keyboard_backspace.svg">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 no-padding modal__container">
                                <div class="col-xs-12 modal__main">
                                    <div class="col-xs-12 no-padding v-margin-bottom-15">
                                        <h3 class="modal__title"><b class="title hidden-xs">Yêu cầu đặt</b><br class="hidden-xs"><small>Quý khách vui lòng nhập thông tin liên hệ bên dưới</small></h3>
                                    </div>
                                    <div class="col-xs-12 no-padding">
                                        <div class="row">
                                            <div class="col-xs-12 v-margin-bottom-15 hidden">
                                                <label class="control-label"><i class="icon ico-ic_departure"></i> <span class="model-departure-location">Hồ Chí Minh</span></label>
                                                <label class="control-label v-margin-left-10"><i class="icon ico-ic_date"></i> <span class="modal-departure">17-08-2024</span></label>
                                                <label class="control-label v-margin-left-10"><i class="icon vicon vicon-travelers"></i> <span class="modal-people">2 người lớn 0 trẻ em</span></label>
                                            </div>
                                            <div class="col-xs-12 v-margin-bottom-15">
                                                <label class="control-label">Họ &amp; Tên <span class="vcolor-danger">*</span></label>
                                                <input maxlength="255" type="text" class="form-control " id="customerName" placeholder="">
                                            </div>
                                            <div class="col-xs-12 v-margin-bottom-15">
                                                <label class="control-label">Điện thoại <span class="vcolor-danger">*</span></label>
                                                <input maxlength="100" type="text" class="form-control" id="customerPhone" value="" placeholder="">
                                            </div>
                                            <div class="col-xs-12 v-margin-bottom-15">
                                                <label class="control-label">Email (nếu có)<span class="vcolor-danger"></span></label>
                                                <input maxlength="100" type="text" class="form-control" id="customerEmail" placeholder="">
                                            </div>
                                            <div class="col-xs-12">
                                                <label class="control-label">Yêu cầu khác</label>
                                                <textarea maxlength="1000" rows="2" cols="30" class="form-control" id="notes"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-xs-12">
                            <button id="captchagg" type="button" class="btn btn-warning btn-action btn-block book-button">
                                <h3><b>Gửi yêu cầu</b><br><small>NEMTRAVEL sẽ liên hệ lại ngay sau ít phút</small></h3>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <div class="fixed-footer-m visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="price-note">
                        <small>Giá chỉ từ</small>
                        <span class="price">6.850.000</span> đ/khách
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="<?= site_url() ?>/lich-trinh-va-gia-tour">
                        <button class="btn btn-flat btn-action btn-md btn-block btn-bottom-request"
                            id="showBookingFormBtn"> Lịch khởi hành
                            <!-- <img class="" data-src="/du-lich/content/img/icon_hardware_keyboard_arrow_right.svg"
                                src="/du-lich/content/img/icon_hardware_keyboard_arrow_right.svg"> -->
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="messenger-icon">
        <a target="_blank" href="https://www.facebook.com/messages/t/366420077024074"><img class="img_messenger" src="<?= site_url() ?>/public/images/messenger-icon.svg"></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true, // Cho phép người dùng click vào các điểm trang
                },
                loop: true,
            });

            // console.log("Swiper instance:", swiper);
            // console.log("Navigation elements:", swiper.navigation);
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/28.0.0/jssor.slider.min.js"
        integrity="sha512-hIV4+MQS3ysAwIMfFP0KMFJXp72W2/+gF595ZWxDjEQFh7UHQ4bq2lAwum2kkr2E36lZvax+Y8tuAQez2Lga7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?= site_url() . '/public/js/jssor.custom.min.js' ?>"></script>
    <script src="<?= site_url() . '/public/js/formdetail.js' ?>"></script>
    <script>
        $(document).ready(function() {


            var list_menu_direc = $(".navbar-nav li");

            // Khôi phục trạng thái active từ localStorage
            list_menu_direc.each(function(index, ele) {
                var isActive = localStorage.getItem("menu_" + index) === "true";
                if (isActive) {
                    $(ele).addClass("active");
                }
            });

            // Thêm sự kiện click để lưu trạng thái vào localStorage
            list_menu_direc.on("click", function() {
                // Xóa class 'active' khỏi tất cả các menu items
                list_menu_direc.removeClass("active");

                // Thêm class 'active' vào menu item được click
                $(this).addClass("active");

                // Cập nhật trạng thái active trong localStorage
                list_menu_direc.each(function(index, ele) {
                    var isActive = $(ele).hasClass("active");
                    localStorage.setItem("menu_" + index, isActive);
                });
            });

            var myLogo = $('.navbar-header img');

            myLogo.on('click', function() {
                // Xóa class 'active' khỏi tất cả các menu items
                list_menu_direc.removeClass("active");

                // Xóa trạng thái active trong localStorage
                list_menu_direc.each(function(index) {
                    localStorage.removeItem("menu_" + index);
                });
            });


            $('.navbar-toggler').on('click', function() {



                $('.nav__overlay').css('display', 'block');


            });

            $('.btn-navbar-close').on('click', function() {

                $('.modal-navbar').removeClass('show');

                $('.nav__overlay').css('display', 'none');

            });

            $('.nav__overlay').on('click', function() {

                $('.modal-navbar').removeClass('show');

                $('.nav__overlay').css('display', 'none');
            })


            $('.navbar-toggler').on('click', function() {

                $('.modal-navbar').toggleClass('show');

                $('.modal-navbar-backdrop').toggleClass('show');

            });

            $('.btn-navbar-close, .modal-navbar-backdrop').on('click', function() {

                $('.modal-navbar').removeClass('show');

                $('.modal-navbar-backdrop').removeClass('show');

            });


        });
    </script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('showBookingFormBtn').addEventListener('click', function() {
                var bookingForm = document.getElementById('mobile-booking-form');
                var btnBackTour = document.querySelector('.btn-back-tour');
                console.log('next', btnBackTour);

                // Sử dụng window.getComputedStyle để lấy giá trị display thực tế
                var computedStyle = window.getComputedStyle(bookingForm);
                console.log('display:', computedStyle.display);

                if (bookingForm.classList.contains('hidden')) {

                    bookingForm.classList.remove('hidden'); // Xóa lớp hidden
                    bookingForm.classList.add('visible'); // Thêm lớp visible
                } else {

                    bookingForm.classList.remove('visible'); // Xóa lớp visible
                    bookingForm.classList.add('hidden'); // Thêm lớp hidden
                }
                if (btnBackTour) {
                    btnBackTour.addEventListener('click', function() {
                        if (bookingForm.style.display === 'block') {
                            bookingForm.style.display = 'none'; // Ẩn phần tử bookingForm
                        }
                    });
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('showBookingFormBtn').addEventListener('click', function() {
                var bookingForm = document.getElementById('mobile-booking-form');
                var btnBackTour = document.querySelector('.btn-back-tour');

                console.log(bookingForm);
                console.log('next', btnBackTour);


                // Kiểm tra thuộc tính display hiện tại của bookingForm
                var computedStyle = window.getComputedStyle(bookingForm);
                console.log('display:', computedStyle.display);

                if (computedStyle.display === 'none') {

                    bookingForm.style.display = 'block'; // Hiển thị phần tử bookingForm
                } else {

                    bookingForm.style.display = 'none'; // Ẩn phần tử bookingForm
                }
                if (btnBackTour) {
                    btnBackTour.addEventListener('click', function() {
                        console.log('đã quay lại');
                        
                        if (bookingForm.style.display === 'block') {
                            bookingForm.style.display = 'none'; // Ẩn phần tử bookingForm

                        }
                    });
                }
            });
        });
    </script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var showBookingFormBtn = document.getElementById('showBookingFormBtn');
            var bookingForm = document.getElementById('mobile-booking-form');
            // var messengerIcon = document.querySelector('.messenger-icon');
            var btnBackTour = document.querySelector('.btn-back-tour');

            console.log('btn', showBookingFormBtn);
            console.log('form', bookingForm);
            // console.log('messengerIcon',messengerIcon);
            console.log('btnBackTour', btnBackTour);
            // console.log(window.getComputedStyle(bookingForm));

            if (showBookingFormBtn) {
                showBookingFormBtn.addEventListener('click', function() {

                    console.log('hell');

                    bookingForm.style.display = 'block'
                    console.log('dispaly ', bookingForm.style.display);

                });
            }

            if (btnBackTour) {
                btnBackTour.addEventListener('click', function() {
                    // console.log('đã bấm quay lại');

                    if (bookingForm.style.display === 'block') {
                        bookingForm.style.display = 'none';

                    }
                });
            }
        });
    </script>
    <?php
    include 'inc/js.php';
    include 'inc/footer.php';
    ?>