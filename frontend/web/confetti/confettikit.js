window.confettiKit = function (t)
{
    var e = this;
    e.version = "1.1.0", e.config =
    {
        colors: ["#a864fd", "#29cdff", "#78ff44", "#ff718d", "#fdff6a"],
        el: "body",
        elements: {
            confetti: {
                direction: "down",
                rotation: !0
            },
            star: {
                count: 15,
                direction: "up",
                rotation: !0
            },
            ribbon: {
                count: 10,
                direction: "down",
                rotation: !0
            }
        },
        confettiCount: 75,
        x: 0,
        y: 0,
        angle: 90,
        decay: .9,
        spread: 45,
        startVelocity: 45,
        position: null
    };
    for (var n in t) e.config[n] = t[n];
    var o = e.config;
    e.renderStar = function (t, e)
    {
        return ''
    }, e.renderRibbon = function (t, e)
    {
        return ''
    }, e.customRender = function (t, e, n, o, i)
    {
        return "text" == e ? '' + t + "

" : "svg" == e ? '' + t + "" : "image" == e ? '' : void 0
    }, e.createElements = function (t, n)
    {
        var i = o.elements.star ? o.elements.star.count : 0,
            s = o.elements.ribbon ? o.elements.ribbon.count : 0,
            c = [];
        if (o.elements.custom && o.elements.custom.length > -1)
        {
            console.log(o.elements.custom.length);
            for (var r = 0; r <= o.elements.custom.length; r++) o.elements.custom[r] && c.push(
            {
                count: o.elements.custom[r].count
            })
        }
        for (var l = 0, a = [], d = 0; d <= n; d++)
        {
            var m = document.createElement("div");
            m.classList = ["fetti"];
            var u = o.colors[d % o.colors.length],
                h = Math.floor(10 * Math.random() + 1) + "px",
                f = Math.floor(10 * Math.random() + 1) + "px";
            if (m.style.width = h, m.style.height = f, m.style.position = "fixed", m.style.zIndex = "999999", o.elements.star && i > 0)
            {
                var y = i - 1;
                y <= o.elements.star.count && y >= 0 && (m.style["background-color"] = "", m.innerHTML = e.renderStar(25, u), m.direction = o.elements.star.direction, m.rotation = o.elements.star.rotation, i = y)
            }
            else if (o.elements.ribbon && s > 0)
            {
                var p = s - 1;
                p <= o.elements.ribbon.count && p >= 0 && (m.style["background-color"] = "", m.innerHTML = e.renderRibbon(30, u), m.direction = o.elements.ribbon.direction, m.rotation = o.elements.ribbon.rotation, s = p)
            }
            else if (o.elements.custom && o.elements.custom.length > -1 && c[l])
            {
                if (c[l])
                {
                    var g = c[l].count - 1;
                    if (g <= c[l].count && g <= c[l].count && g >= 0)
                    {
                        m.style["background-color"] = "";
                        var v = o.elements.custom[l].contentType,
                            w = o.elements.custom[l].content,
                            b = o.elements.custom[l].width,
                            x = o.elements.custom[l].textSize;
                        m.innerHTML = e.customRender(w, v, u, b, x), m.direction = o.elements.custom[l].direction, m.rotation = o.elements.custom[l].rotation, c[l].count = g, 0 == c[l].count && l++
                    }
                }
            }
            else h == f ? (m.style["background-color"] = u, m.style.borderRadius = "50%") : m.style["background-color"] = u, m.direction = o.elements.confetti && o.elements.confetti.direction ? o.elements.confetti.direction : "down", m.rotation = !o.elements.confetti || !o.elements.confetti.rotation || o.elements.confetti.rotation;
            t.insertBefore(m, t.firstChild), a.push(m)
        }
        return a
    }, e.randomPhysics = function (t, e, n, o, i)
    {
        var s = n * (Math.PI / 180),
            c = o * (Math.PI / 180);
        return {
            x: t,
            y: e,
            wobble: 10 * Math.random(),
            velocity: .3 * i + Math.random() * i,
            angle2D: -s + (.3 * c - Math.random() * c),
            angle3D: -Math.PI / 4 + Math.random() * (Math.PI / 2),
            tiltAngle: Math.random() * Math.PI
        }
    }, e.updateFetti = function (t, e, n)
    {
        t.physics.x += Math.cos(t.physics.angle2D) * t.physics.velocity, t.physics.y += Math.sin(t.physics.angle2D) * t.physics.velocity, t.physics.z += Math.sin(t.physics.angle3D) * t.physics.velocity, t.physics.wobble += .1, t.physics.velocity *= n, "up" == t.element.direction ? t.physics.y -= 3 : t.physics.y += 3, t.physics.tiltAngle += .1;
        var o, i = t.physics.x,
            s = t.physics.y,
            c = t.physics.tiltAngle,
            r = t.physics.wobble,
            l = i + 10 * Math.cos(r),
            a = s + 10 * Math.sin(r);
        o = t.element.rotation ? "translate3d(" + l + "px, " + a + "px, 0) rotate3d(1, 1, 1, " + c + "rad)" : "translate3d(" + l + "px, " + a + "px, 0)", t.element.style.transform = o, t.element.style.opacity = 1 - e
    }, e.animate = function (t, n, o)
    {
        var i = 200,
            s = 0;
        requestAnimationFrame(function c()
        {
            n.forEach(function (t)
            {
                e.updateFetti(t, s / i, o)
            }), (s += 1) < i ? requestAnimationFrame(c) : n.forEach(function (e)
            {
                t.removeChild(e.element)
            })
        })
    }, e.confetti = function (t, n, i)
    {
        angle = o.angle, decay = o.decay, spread = o.spread, startVelocity = o.startVelocity, elementCount = o.confettiCount;
        var s = [];
        e.createElements(t, elementCount).map(function (t)
        {
            var o =
            {
                element: t,
                physics: e.randomPhysics(n, i, angle, spread, startVelocity)
            };
            s.push(o)
        }), e.animate(t, s, decay)
    };
    var i = document.querySelector(o.el);
    if (null != o.position)
    {
        if ("bottomLeftRight" == o.position) o.angle = 45, e.confetti(i, 0, window.innerHeight - 200), (s = t).position = null, s.angle = 135, s.x = window.innerWidth, s.y = window.innerHeight - 200, new confettiKit(s);
        else if ("topLeftRight" == o.position)
        {
            var s;
            o.angle = 340, e.confetti(i, 0, 0), (s = t).position = null, s.angle = 190, s.x = window.innerWidth, s.y = 0, new confettiKit(s)
        }
    }
    else e.confetti(i, o.x, o.y)
};