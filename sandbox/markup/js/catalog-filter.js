/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addClass (object, className) {
  object.classList ? object.classList.add(className) : object.className += ' ' + className;
}

function removeAllClassesButFirst (component, skipClass) {
  var classList = component.classList;
  var componentClass = classList.item(0);
  var toRemove = [];
  classList.forEach(function(className) {
    if (className != skipClass && className != componentClass && className != 'component') {
      toRemove.push(className);
    }
  });
  toRemove.forEach(function(className) {
    classList.remove(className);
  });
}

function applyState (component, stateClass) {
  var componentClass = component.classList.item(0);
  component.className = componentClass;
  component.classList.add(stateClass);
}

function isCurrentState (component, state) {
  return component.classList.contains(state)
}

function whichAnimationEvent(){
  var t,
      el = document.createElement("fakeelement");

  var animations = {
    "animation"      : "animationend",
    "OAnimation"     : "oAnimationEnd",
    "MozAnimation"   : "animationend",
    "WebkitAnimation": "webkitAnimationEnd"
  }

  for (t in animations){
    if (el.style[t] !== undefined){
      return animations[t];
    }
  }
}

var animationEvent = whichAnimationEvent();

// Set all components to state 0
var components = document.querySelectorAll('.component');
components.forEach(function (component) {
  addClass(component, 'state0');
});

// Javascript for component spec / animation / block-filter

// console.log('Longest animation for transition 0: transition-specanimationblock-filter0-0-0');

function applyComponentspecanimationblockfilterTransition0() {
  //console.log('applyComponentspecanimationblockfilterTransition0');
  var component = document.querySelector('.specanimationblock-filter');
  addClass(component, 'transition-specanimationblock-filter0-0-0');
  addClass(component, 'transition-specanimationblock-filter0-1-0');
}

// Transition specanimationblockfilter 0 Event Handlers
function transitionspecanimationblockfilter0EndedHandler(event) {
  //console.log(event.animationName + ' ' + 'transitionspecanimationblockfilter0EndedHandler');
  var component = document.querySelector('.specanimationblock-filter');
  if (!event || event.animationName == 'transition-specanimationblock-filter0-0-0') {
    removeAllClassesButFirst(component, 'state1');
    addClass(component, 'state1');
    //console.log('specanimationblockfilter Transition 0 ended');

    
  }
}



function clickspecanimationblockfilter0Handler(event) {
  var component = document.querySelector('.specanimationblock-filter');
  if (isCurrentState(component, 'state0')) {
    try {
      console.log('Listener for event: click triggered. State: state0');
      removeAllClassesButFirst(component, 'state0');
      applyComponentspecanimationblockfilterTransition0();
    }
    catch (e) {}
  }
}


// Transition specanimationblockfilter 0 Event Listeners

var component = document.querySelector('.specanimationblock-filter');
if (component != null){
    component.style['pointer-events'] = 'auto';
}
child = document.querySelector('.specanimationblock-filter');
if (child) {
  child.style['pointer-events'] = 'auto';
  child.addEventListener('click', clickspecanimationblockfilter0Handler);
}
else {
  console.log('Could not find element at: .specanimationblock-filter');
}
child = document.querySelector('.specanimationblock-filter .blockfilter');
if (child) {
  component.addEventListener(animationEvent, transitionspecanimationblockfilter0EndedHandler);
}
else {
  console.log('Could not find element at: .specanimationblock-filter .blockfilter');
}

// Javascript for component spec / animation / block-filter

// console.log('Longest animation for transition 1: transition-specanimationblock-filter1-0-0');

function applyComponentspecanimationblockfilterTransition1() {
  //console.log('applyComponentspecanimationblockfilterTransition1');
  var component = document.querySelector('.specanimationblock-filter');
  addClass(component, 'transition-specanimationblock-filter1-0-0');
  addClass(component, 'transition-specanimationblock-filter1-1-0');
}

// Transition specanimationblockfilter 1 Event Handlers
function transitionspecanimationblockfilter1EndedHandler(event) {
  //console.log(event.animationName + ' ' + 'transitionspecanimationblockfilter1EndedHandler');
  var component = document.querySelector('.specanimationblock-filter');
  if (!event || event.animationName == 'transition-specanimationblock-filter1-0-0') {
    removeAllClassesButFirst(component, 'state0');
    addClass(component, 'state0');
    //console.log('specanimationblockfilter Transition 1 ended');

    
  }
}



function clickspecanimationblockfilter1Handler(event) {
  var component = document.querySelector('.specanimationblock-filter');
  if (isCurrentState(component, 'state1')) {
    try {
      console.log('Listener for event: click triggered. State: state1');
      removeAllClassesButFirst(component, 'state1');
      applyComponentspecanimationblockfilterTransition1();
    }
    catch (e) {}
  }
}


// Transition specanimationblockfilter 1 Event Listeners

var component = document.querySelector('.specanimationblock-filter');
if (component != null){
    component.style['pointer-events'] = 'auto';
}
child = document.querySelector('.specanimationblock-filter');
if (child) {
  child.style['pointer-events'] = 'auto';
  child.addEventListener('click', clickspecanimationblockfilter1Handler);
}
else {
  console.log('Could not find element at: .specanimationblock-filter');
}
child = document.querySelector('.specanimationblock-filter .blockfilter');
if (child) {
  component.addEventListener(animationEvent, transitionspecanimationblockfilter1EndedHandler);
}
else {
  console.log('Could not find element at: .specanimationblock-filter .blockfilter');
}

