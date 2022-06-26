import React,{Component} from 'react';
import ReactDOM from 'react-dom';
import GetFarmImage from './GetFarmImage';


function run(){

ReactDOM.render(
    <GetFarmImage/>,
    document.getElementById("Image")
);
}

const loadedStates = ['complete', 'loaded', 'interactive'];

if (loadedStates.includes(document.readyState) && document.body) {
  run();
} else {
  window.addEventListener('DOMContentLoaded', run, false);
}