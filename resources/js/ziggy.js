const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"logout":{"uri":"logout","methods":["GET","HEAD"]},"dashboard":{"uri":"dashboard","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["GET","HEAD"]},"post_login":{"uri":"post_login","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"post_register":{"uri":"post_register","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
