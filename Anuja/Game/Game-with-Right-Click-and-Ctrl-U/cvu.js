
	document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('Nice approach, you are in my zone. So, not allowed my dear.');
            return false;
        } else {
            return true;
        }
};