<template>
  <div id="app">
    <nav class="blue-grey darken-3 z-index">
      <div class="nav-wrapper row">
        <div class="col s12">
          <a href="#/" class="blue-grey darken-4 brand-logo">iFinance</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#/logout"><i class="ion-log-out"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row" id="main">
      <div class="col s12 m4 l3 blue-grey padding-top" id="left-side">
        <div class="valign-wrapper">
          <div class="col" layout="row">
            <img src="https://www.gravatar.com/avatar/beef4a109b5744b8b51537c0136f7e3b" alt="Erik Figueiredo" class="circle">
          </div>
          <div>
            <p>
              <span class="grey-text text-lighten-2">Erik Figueiredo</span><br>
              <a href="#" class="black-text"><small>configurações <i class="ion-gear-a"></i></small></a>
            </p>
          </div>
        </div>
        <div class="divider blue-grey darken-2"></div>
        <div class="collection">
          <a href="#/" class="collection-item grey darken-2 white-text">Financeiro</a>
          <a href="#/contas" class="collection-item">Contas</a>
        </div>
      </div>
      <div class="col s12 m8 l9 grey lighten-3" id="right-side">
        <router-view></router-view>
        <div class="col s10 grey lighten-2">
          <small>by <a href="">School Of Net</a> - 	&copy; 2017</small>
        </div>
        <div class="col s2 grey lighten-2 right-align">
          <small>v1.0.0@dev</small>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'app',
  styles: [
    require('materialize-css/dist/css/materialize.min.css'),
    require('ionicons/dist/css/ionicons.min.css')
  ]
}
</script>

<style>
  html, body, #app, #main {
    height: 100%;
  }
  #left-side, #right-side {
    min-height: 100%;
    margin: 0px;
  }
  body {
    background-color: #607d8b !important;
  }
  .z-index {
    position: relative;
    z-index: 9;
  }
  .padding-top {
    padding-top:15px !important;
  }
  .brand-logo {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .divider {
    padding: 5px;
    margin: 20px 0;
  }
  .content-header {
    margin-bottom: 1.68rem;
  }
  .content-header h1 {
    font-size: 28px;
    margin-bottom: 0;
  }
  .content-header h1 small {
    font-size: 70%;
    color: #9e9e9e;
  }
  table thead tr th:first-child {
    width: 1%;
  }
  table img {
    margin-right: 10px;
  }
</style>
