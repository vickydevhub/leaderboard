@extends('layouts.app')
@section('content')    
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/supah/pen/WwrJpw?limit=all&page=86&q=box" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>  
<style class="cp-pen-styles">/*--------------------
Body
--------------------*/
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  min-height: 950px;
  height: 100vh;
  margin: 0;
  background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
  background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
  color: #fff;
  font-family: 'Open Sans', sans-serif;
}

/*--------------------
Leaderboard
--------------------*/
.leaderboard {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 285px;
  height: 608px;
  background: -webkit-linear-gradient(top, #3a404d, #181c26);
  background: linear-gradient(to bottom, #3a404d, #181c26);
  border-radius: 10px;
  box-shadow: 0 7px 30px rgba(62, 9, 11, 0.3);
}
.leaderboard h1 {
  font-size: 18px;
  color: #e1e1e1;
  padding: 12px 13px 18px;
}
.leaderboard h1 svg {
  width: 25px;
  height: 26px;
  position: relative;
  top: 3px;
  margin-right: 6px;
  vertical-align: baseline;
}
.leaderboard ol {
  counter-reset: leaderboard;
}
.leaderboard ol li {
  position: relative;
  z-index: 1;
  font-size: 14px;
  counter-increment: leaderboard;
  padding: 18px 10px 18px 50px;
  cursor: pointer;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
          transform: translateZ(0) scale(1, 1);
}
.leaderboard ol li::before {
  content: counter(leaderboard);
  position: absolute;
  z-index: 2;
  top: 15px;
  left: 15px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  color: #c24448;
  background: #fff;
  border-radius: 20px;
  text-align: center;
}
.leaderboard ol li mark {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 18px 10px 18px 50px;
  margin: 0;
  background: none;
  color: #fff;
}
.leaderboard ol li mark::before, .leaderboard ol li mark::after {
  content: '';
  position: absolute;
  z-index: 1;
  bottom: -11px;
  left: -9px;
  border-top: 10px solid #c24448;
  border-left: 10px solid transparent;
  -webkit-transition: all .1s ease-in-out;
  transition: all .1s ease-in-out;
  opacity: 0;
}
.leaderboard ol li mark::after {
  left: auto;
  right: -9px;
  border-left: none;
  border-right: 10px solid transparent;
}
.leaderboard ol li small {
  position: relative;
  z-index: 2;
  display: block;
  text-align: right;
}
.leaderboard ol li::after {
  content: '';
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fa6855;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.08);
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  opacity: 0;
}
.leaderboard ol li:nth-child(1) {
  background: #fa6855;
}
.leaderboard ol li:nth-child(1)::after {
  background: #fa6855;
}
.leaderboard ol li:nth-child(2) {
  background: #e0574f;
}
.leaderboard ol li:nth-child(2)::after {
  background: #e0574f;
  box-shadow: 0 2px 0 rgba(0, 0, 0, 0.08);
}
.leaderboard ol li:nth-child(2) mark::before, .leaderboard ol li:nth-child(2) mark::after {
  border-top: 6px solid #ba4741;
  bottom: -7px;
}
.leaderboard ol li:nth-child(3) {
  background: #d7514d;
}
.leaderboard ol li:nth-child(3)::after {
  background: #d7514d;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.11);
}
.leaderboard ol li:nth-child(3) mark::before, .leaderboard ol li:nth-child(3) mark::after {
  border-top: 2px solid #b0433f;
  bottom: -3px;
}
.leaderboard ol li:nth-child(4) {
  background: #cd4b4b;
}
.leaderboard ol li:nth-child(4)::after {
  background: #cd4b4b;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
}
.leaderboard ol li:nth-child(4) mark::before, .leaderboard ol li:nth-child(4) mark::after {
  top: -7px;
  bottom: auto;
  border-top: none;
  border-bottom: 6px solid #a63d3d;
}
.leaderboard ol li:nth-child(5) {
  background: #c24448;
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(5)::after {
  background: #c24448;
  box-shadow: 0 -2.5px 0 rgba(0, 0, 0, 0.12);
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(5) mark::before, .leaderboard ol li:nth-child(5) mark::after {
  top: -9px;
  bottom: auto;
  border-top: none;
  border-bottom: 8px solid #993639;
}
.leaderboard ol li:hover {
  z-index: 2;
  overflow: visible;
}
.leaderboard ol li:hover::after {
  opacity: 1;
  -webkit-transform: scaleX(1.06) scaleY(1.03);
          transform: scaleX(1.06) scaleY(1.03);
}
.leaderboard ol li:hover mark::before, .leaderboard ol li:hover mark::after {
  opacity: 1;
  -webkit-transition: all .35s ease-in-out;
  transition: all .35s ease-in-out;
}
</style></head><body>
 
<div class="leaderboard">
  <h1>
    <svg class="ico-cup">
      <use xlink:href="#cup"></use>
    </svg>
    Most active Players
  </h1>
  <ol>
    @forelse ($games as $game)
    <li>
      <mark>{{$game->playerWon->name}}</mark>
      <small>{{$game->matches_won}}</small>
    </li>
    @empty
        <li>No game played</li>
    @endforelse
    
    
  </ol>
</div>
@endsection