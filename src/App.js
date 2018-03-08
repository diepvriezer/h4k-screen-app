import React, { Component } from "react";
import OverlayLogo from "./Logo";
import "./App.css";

/*
Race in progress?
Y: listen for results, show block
N: wait for "space"

On space:
List upcoming block
 - Saturday 2500m/250m Block 1
  * Coming up
		* Show divisions
		* 43 DCl 8+ (40 entries)
		* 48 ... (n entries)
	
 - Race mode
  * Listen for start
	* 


*/

class PushListener extends Component {
	
}

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit :::D <code>src/App.js</code> and save to reload.
        </p>
				<OverlayLogo text="Roeivierkamp 2018" />
      </div>
    );
  }
}

export default App;
