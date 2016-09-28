// Generated by CoffeeScript 1.7.1
define(['external/flash_detect', 'modules/clean/gandalf_util', 'modules/core/browser'], function(FlashDetect, GandalfUtil, Browser) {
  window.DefaultWebSocket = window.WebSocket;
  if (window.FlashDetect.versionAtLeast(10, 3)) {
    window.WEB_SOCKET_FORCE_FLASH = true;
  }
  window.WEB_SOCKET_SWF_LOCATION = Constants.static_url_web_socket_swf;
  if (!GandalfUtil.getGandalfRule("unity-web-debug")) {
    return window.WEB_SOCKET_LOGGER = {
      log: function() {},
      error: function() {}
    };
  }
});

//# sourceMappingURL=flash_config.map