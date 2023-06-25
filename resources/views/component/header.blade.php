<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.13.4/dataTables.bootstrap5.min.js" integrity="sha512-KFdmxVdAssPxrj4mZh1c01AbGXMAmXmBsO4Tc/GG5+kNLqitTfUBpDHicyDwF7CaFV+pN1r808IOK+vHzWB8gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/61b10549df.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets{{ "./css/app.css" }}">
<style>

#button-submit:hover{
        background-color: rgb(161, 161, 161);
    }

*{
  box-sizing: border-box;
}

.chat_window {
  position: absolute;
  width: calc(100% - 20px);
  max-width: 800px;
  height: 500px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.top_menu {
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 20px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 347px;
  overflow: scroll;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  background-color: #fff;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.message_template {
  display: none;
}


.divider:after,
.divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}

#pButton {
    float: left;
}

#timeline {
    width: 90%;
    height: 2px;
    margin-top: 20px;
    margin-left: 10px;
    float: left;
    -webkit-border-radius: 15px;
    border-radius: 15px;
    background: rgba(0, 0, 0, 0.3);
}

#pButton {
    margin-top: 12px;
  cursor: pointer;
}

#playhead {
    width: 8px;
    height: 8px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-top: -3px;
    background: black;
    cursor: pointer;
}


</style>

<title>Document</title>


