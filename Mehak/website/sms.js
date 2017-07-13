function smsCount(Msg) {
    var unicodeFlag = 0;
   var extraChars = 0;
   var msgCount = 0; 
   for (var i = 0; (!unicodeFlag && (i < Msg.length)); i++) {
      if ((Msg.charAt(i) >= '0') && (Msg.charAt(i) <= '9')) {
      }
      else if ((Msg.charAt(i) >= 'A') && (Msg.charAt(i) <= 'Z')) {
      }
      else if ((Msg.charAt(i) >= 'a') && (Msg.charAt(i) <= 'z')) {
      }
      else if (Msg.charAt(i) == '@') {
      }
      else if (Msg.charCodeAt(i) == 0xA3) {
      }
      else if (Msg.charAt(i) == '$') {
      }
      else if (Msg.charCodeAt(i) == 0xA5) {
      }
      else if (Msg.charCodeAt(i) == 0xE8) {
      }
      else if (Msg.charCodeAt(i) == 0xE9) {
      }
      else if (Msg.charCodeAt(i) == 0xF9) {
      }
      else if (Msg.charCodeAt(i) == 0xEC) {
      }
      else if (Msg.charCodeAt(i) == 0xF2) {
      }
      else if (Msg.charCodeAt(i) == 0xC7) {
      }
      else if (Msg.charAt(i) == '\r') {
      }
      else if (Msg.charAt(i) == '\n') {
      }
      else if (Msg.charCodeAt(i) == 0xD8) {
      }
      else if (Msg.charCodeAt(i) == 0xF8) {
      }
      else if (Msg.charCodeAt(i) == 0xC5) {
      }
      else if (Msg.charCodeAt(i) == 0xE5) {
      }
      else if (Msg.charCodeAt(i) == 0x394) {
      }
      else if (Msg.charAt(i) == '_') {
      }
      else if (Msg.charCodeAt(i) == 0x3A6) {
      }
      else if (Msg.charCodeAt(i) == 0x393) {
      }
      else if (Msg.charCodeAt(i) == 0x39B) {
      }
      else if (Msg.charCodeAt(i) == 0x3A9) {
      }
      else if (Msg.charCodeAt(i) == 0x3A0) {
      }
      else if (Msg.charCodeAt(i) == 0x3A8) {
      }
      else if (Msg.charCodeAt(i) == 0x3A3) {
      }
      else if (Msg.charCodeAt(i) == 0x398) {
      }
      else if (Msg.charCodeAt(i) == 0x39E) {
      }
      else if (Msg.charCodeAt(i) == 0xC6) {
      }
      else if (Msg.charCodeAt(i) == 0xE6) {
      }
      else if (Msg.charCodeAt(i) == 0xDF) {
      }
      else if (Msg.charCodeAt(i) == 0xC9) {
      }
      else if (Msg.charAt(i) == ' ') {
      }
      else if (Msg.charAt(i) == '!') {
      }
      else if (Msg.charAt(i) == '\"') {
      }
      else if (Msg.charAt(i) == '#') {
      }
      else if (Msg.charCodeAt(i) == 0xA4) {
      }
      else if (Msg.charAt(i) == '%') {
      }
      else if (Msg.charAt(i) == '&') {
      }
      else if (Msg.charAt(i) == '\'') {
      }
      else if (Msg.charAt(i) == '(') {
      }
      else if (Msg.charAt(i) == ')') {
      }
      else if (Msg.charAt(i) == '*') {
      }
      else if (Msg.charAt(i) == '+') {
      }
      else if (Msg.charAt(i) == ',') {
      }
      else if (Msg.charAt(i) == '-') {
      }
      else if (Msg.charAt(i) == '.') {
      }
      else if (Msg.charAt(i) == '/') {
      }
      else if (Msg.charAt(i) == ':') {
      }
      else if (Msg.charAt(i) == ';') {
      }
      else if (Msg.charAt(i) == '<') {
      }
      else if (Msg.charAt(i) == '=') {
      }
      else if (Msg.charAt(i) == '>') {
      }
      else if (Msg.charAt(i) == '?') {
      }
      else if (Msg.charCodeAt(i) == 0xA1) {
      }
      else if (Msg.charCodeAt(i) == 0xC4) {
      }
      else if (Msg.charCodeAt(i) == 0xD6) {
      }
      else if (Msg.charCodeAt(i) == 0xD1) {
      }
      else if (Msg.charCodeAt(i) == 0xDC) {
      }
      else if (Msg.charCodeAt(i) == 0xA7) {
      }
      else if (Msg.charCodeAt(i) == 0xBF) {
      }
      else if (Msg.charCodeAt(i) == 0xE4) {
      }
      else if (Msg.charCodeAt(i) == 0xF6) {
      }
      else if (Msg.charCodeAt(i) == 0xF1) {
      }
      else if (Msg.charCodeAt(i) == 0xFC) {
      }
      else if (Msg.charCodeAt(i) == 0xE0) {
      }
      else if (Msg.charCodeAt(i) == 0x391) {
      }
      else if (Msg.charCodeAt(i) == 0x392) {
      }
      else if (Msg.charCodeAt(i) == 0x395) {
      }
      else if (Msg.charCodeAt(i) == 0x396) {
      }
      else if (Msg.charCodeAt(i) == 0x397) {
      }
      else if (Msg.charCodeAt(i) == 0x399) {
      }
      else if (Msg.charCodeAt(i) == 0x39A) {
      }
      else if (Msg.charCodeAt(i) == 0x39C) {
      }
      else if (Msg.charCodeAt(i) == 0x39D) {
      }
      else if (Msg.charCodeAt(i) == 0x39F) {
      }
      else if (Msg.charCodeAt(i) == 0x3A1) {
      }
      else if (Msg.charCodeAt(i) == 0x3A4) {
      }
      else if (Msg.charCodeAt(i) == 0x3A5) {
      }
      else if (Msg.charCodeAt(i) == 0x3A7) {
      }
      else if (Msg.charAt(i) == '^') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '{') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '}') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '\\') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '[') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '~') {
         extraChars++;
      }
      else if (Msg.charAt(i) == ']') {
         extraChars++;
      }
      else if (Msg.charAt(i) == '|') {
         extraChars++;
      }
      else if (Msg.charCodeAt(i) == 0x20AC) {
         extraChars++;
      }
      else {
         unicodeFlag = 1;
      }
   }
    
   if (unicodeFlag) {
      msgCount = Msg.length;

 
      if (msgCount <= 70) {
         msgCount = 1;
      }
      else {
         msgCount += (67-1);
         msgCount -= (msgCount % 67);
         msgCount /= 67;
      }
   } 
   else {
      msgCount = Msg.length + extraChars;
	
      if (msgCount <= 160) {
         msgCount = 1;
      }
      else {
         msgCount += (153-1);
         msgCount -= (msgCount % 153);
         msgCount /= 153;
      }
   }
    return [Msg.length,unicodeFlag,msgCount]
 
    
}
