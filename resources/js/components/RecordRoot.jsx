import React from "react";
import ReactDOM from "react-dom";

import List from "./record/List";

function RecordRoot() {
    return (
        <div>
            <List></List>
        </div>
    );
}

export default RecordRoot;

if (document.getElementById("record-main")) {
    ReactDOM.render(<RecordRoot />, document.getElementById("record-main"));
}
