import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "your-pusher-key"
    // Other configuration options
});
