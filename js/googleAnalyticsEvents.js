function iFastNetEvent(location, type) {
    gtag('event', 'AffiliateClick', {
        'affiliate': 'iFastNet',
        'location': location,
        'plan': type
    });
}

function NameSiloEvent(location, type) {
    gtag('event', 'AffiliateClick', {
        'affiliate': 'NameSilo',
        'location': location,
        'plan': type
    });
}

function BeginSignupEvent(location, button) {
    gtag('event', 'DirectToSignupClick', {
        'location': location,
        'button': button
    });
}