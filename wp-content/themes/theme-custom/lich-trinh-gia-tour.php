<?php
/*
    Template Name: Tour Schedule
*/
include 'inc/head.php';
// include 'inc/header.php';
?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

    .v-margin-bottom-0 {
        margin-bottom: 0px
    }


    .v-margin-bottom-3 {
        margin-bottom: 3px
    }

    .v-margin-bottom-5 {
        margin-bottom: 5px
    }

    .v-margin-bottom-8 {
        margin-bottom: 8px
    }

    .v-margin-bottom-10 {
        margin-bottom: 10px
    }

    .v-margin-bottom-15 {
        margin-bottom: 10px
    }

    .v-margin-right-15 {
        margin-right: 15px
    }



    .v-margin-bottom-20 {
        margin-bottom: 20px
    }


    .v-margin-bottom-25 {
        margin-bottom: 25px
    }

    .v-margin-bottom-30 {
        margin-bottom: 30px
    }

    @keyframes spin {
        from {
            transform: scale(1) rotate(0deg)
        }

        to {
            transform: scale(1) rotate(360deg)
        }
    }

    a:focus,
    a:hover {
        color: #26bed6
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
        padding: 13px;
        cursor:pointer
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

    /* để */


    .floatBox {
        transition: all .2s ease-in-out;
        padding-top: 15px;
        background-color: rgba(0, 60, 113, 0.05);
        border: 1px solid rgba(0, 60, 113, 0.05)
    }

    .floatBox.highlight {
        background-color: #feeec7;
        background: linear-gradient(to bottom, #fff 0, #fff 100%);
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



    @media only screen and (max-width: 320px) {
        .tourDetailheadLine {
            font-size: 20px
        }
    }


    .v-margin-right-5 {
        margin-right: 5px
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

    @media only screen and (max-width: 767px) {
        .score-container.padding-mobile {
            padding: 0 15px
        }
    }


    .affix-bottom {
        position: absolute
    }


    @media only screen and (min-width: 320px) and (max-width: 414px) {
        footer {
            padding-bottom: 30px
        }
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

    @media only screen and (min-width: 320px) and (max-width: 480px) {
        #getBundlePriceModal {
            padding-top: 0
        }

        /* #getBundlePriceModal.modal {
            background-color: #fff
        } */

        /* #getBundlePriceModal .modal-dialog {
            position: fixed;
            width: 100%;
            height: 100%;
            margin: 0
        } */

        /* #getBundlePriceModal .modal-dialog .modal-content {
            border: none;
            box-shadow: none;
            position: absolute;
            width: 100%;
            height: 100%
        } */

        /* #getBundlePriceModal .modal-dialog .modal-content .modal__title {
            margin: 0
        } */

        #getBundlePriceModal .modal-dialog .modal-content .modal-footer {
            position: absolute;
            bottom: 5px;
            width: 100%;
            box-shadow: 0 -2px 6px 0 rgba(0, 0, 0, 0.1);
            padding: 3px 0px
        }

        h3 small {
            font-size: 52%
        }

        #getBundlePriceModal .modal-dialog .modal-content .modal-footer .btn {
            margin-bottom: 2px;
            height: 72px;

        }
    }

    /* @media only screen  {
        .v-modal .modal-content .modal-footer button {
            padding: 8px;
            font-size: 14px
        }
    } */

    /* @media only screen and (max-width: 767px) {
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
    } */

    .hidden {
        display: none !important;
        z-index: 99;
    }

    .visible {
        display: block !important;
    }
</style>

<div class="col-xs-12 no-padding mobile-booking-form v-margin-bottom-10 tourFormPrice show" id="mobile-booking-form">
    <div class="wrap-header-booking">
        <span class="title">Lịch Trình và Giá Tour</span>
        <img class="btn-back-tour" data-src="<?= site_url() ?>/public/images/icon_hardware_keyboard_backspace.svg" src="<?= site_url() ?>/public/images/icon_hardware_keyboard_backspace.svg">
    </div>
    <div class="col-xs-12 floatBox highlight">
        <h3 class="mobile-booking-title"><b>Tour Thái Lan 5N4Đ: Bangkok - Pattaya - Vườn Nong Nooch - Lâu Đài Tỷ Phú - 1 Đêm Resort Ven Sông</b></h3>
        <div class="col-xs-12 no-padding v-margin-bottom-5 call-now hidden">Đặt ngay, chỉ 2 phút. Hoặc gọi <a href="tel:02839338002">(028) 3933 8002</a></div>
        <div class="col-xs-12 no-padding v-margin-bottom-10 select-depart-date">Chọn Lịch Trình và Xem Giá:</div>
        <div class="col-xs-12 wrapper-depart-date">
            <div class="left">
                <ul class="ls-date">
                    <li class="item box-white active" data-departdate="2024-08-17">17/08</li>
                    <li class="item box-white" data-departdate="2024-09-04">04/09</li>
                    <li class="item box-white" data-departdate="2024-09-07">07/09</li>
                </ul>
            </div>
            <div class="right">
                <div class="form-group box-white">
                    <div class="date-input-group">
                        <i class="fa fa-calendar-o"></i>
                        <label readonly="" type="text" class="form-control date-input dates-date btn-general DateCheckinField" value="11-11-2017"><span class="DateCheckinText">Tất cả</span></label>
                        <input type="hidden" class="get_date" value="2024-08-17">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 box-white">
            <span class="text-detail">
                <span class="width-70 hadsub">Người lớn<span class="sub">&gt; 10 tuổi</span></span>
            </span>
            <span class="SpecialRateAdultAvg price-color hide-class"></span><span class="RateAdultAvg price-color"> x 6.850.000</span>
            <div class="btn-group">
                <button type="button" class="btn number-button minus-adult btn-general" fdprocessedid="qkson">
                    <i class="fa fa-minus"></i>
                </button>
                <span class="number-detail number-adult">2</span>
                <button type="button" class="btn number-button plus-adult btn-general" fdprocessedid="5hrf8">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="col-xs-12 box-white group-child">
            <span class="text-detail">
                <span class="width-70 hadsub">Trẻ em<span class="sub">2 - 10 tuổi</span></span>
            </span>
            <span class="SpecialRateChildAvg SpecialRateChild1Avg price-color hide-class"></span><span class="RateChildAvg RateChild1Avg price-color hide-class"></span>
            <div class="btn-group">
                <button type="button" class="btn number-button minus-child btn-general" fdprocessedid="0yxweh">
                    <i class="fa fa-minus"></i>
                </button>
                <span class="number-detail number-child">0</span>
                <button type="button" class="btn number-button plus-child btn-general" fdprocessedid="54kydg">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="col-xs-12 box-white group-infant">
            <span class="text-detail">
                <span class="width-70 hadsub">Trẻ nhỏ<span class="sub">&lt; 2 tuổi</span></span>
            </span>
            <span class="SpecialRateChildAvg SpecialRateChildInfantAvg price-color hide-class"></span><span class="RateChildAvg RateChildInfantAvg price-color hide-class"></span>
            <div class="btn-group">
                <button type="button" class="btn number-button minus-infant btn-general" fdprocessedid="in6eic">
                    <i class="fa fa-minus"></i>
                </button>
                <span class="number-detail number-infant">0</span>
                <button type="button" class="btn number-button plus-infant btn-general" fdprocessedid="0vm4zg">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="col-xs-12 showMsgPrice">
            <img class="ico-showPrice ico-0 hidden" src="/du-lich/content/img/non.svg">
            <img class="ico-showPrice ico-1" src="/du-lich/content/img/info.svg">
            <img class="ico-showPrice ico-2 hidden" src="/du-lich/content/img/red-flash.svg">
            <span>Liên hệ để xác nhận chỗ</span>
        </div>
        <div class="col-xs-12 no-padding v-margin-bottom-15 showMsgAllotment hide-class">
            <span style="color:#ffbd00;">Chỗ cuối cùng đã được đặt vui lòng chọn ngày khác</span>
        </div>
        <div class="col-xs-12 no-padding adult-surcharge RateSurchargeAdult hide-class">
            <div class="col-xs-6 no-padding"><span class="text-left">&nbsp;</span></div>
            <div class="col-xs-6 no-padding text-right"><span class="price-text">&nbsp;</span></div>
        </div>
        <div class="col-xs-12 no-padding adult-surcharge SpecialRateSurchargeAdult hide-class">
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
            <span class="price totalPrice">13.700.000 <span class="tourItemCurrency">VND</span></span>
        </div>
        <div class="col-xs-12 no-padding v-margin-bottom-15 showCancelPolicy hide-class">
            <span>Không hoàn hũy</span>
        </div>
        <div class="col-xs-12 no-padding v-margin-bottom-15 commistionRate hide-class">
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
                        <button class="btn btn-flat btn-action btn-md btn-block adviseButton" id="adviseButton">Liên hệ tư vấn</button>
                    </div>
                </div>
                <div class="col-xs-6 btn-right">
                    <div class="col-xs-12 no-padding check-Button hide-class">
                        <button class="btn btn-flat btn-action btn-md btn-block checkButton requestPrice">Xem giá</button>
                    </div>
                    <div class="col-xs-12 no-padding request-Button">
                        <button class="btn btn-flat btn-action btn-md btn-block requestButton" id="bookTourBtn">Đặt Tour ngay</button>
                    </div>
                    <div class="col-xs-12 no-padding request-disable-Button hide-class">
                        <button class="btn btn-flat btn-action btn-md btn-block requestdisableButton" disabled="">Đặt Tour ngay</button>
                    </div>
                    <div class="col-xs-12 no-padding book-Button hide-class">
                        <button class="btn btn-flat btn-action btn-md btn-block bookButton">Đặt Tour Ngay</button>
                    </div>
                    <div class="col-xs-12 no-padding processing-Button hide-class">
                        <button class="btn btn-flat btn-action btn-md btn-block processingButton" disabled="">Đang xử lý</button>
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

<!-- Modal -->
<div class="modal fade tour-modal-request" id="getBundlePriceModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog book-modal">
        <div class="modal-content" style="width: auto;
    height: 521px; text-align:center">
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

<script>
    document.querySelector(".btn-back-tour").addEventListener("click", function() {
        window.history.back();
    });
</script>

<?php
include 'inc/js.php';
// include 'inc/footer.php';
?>