# 📡 Real-Time Live Chat Application

## Laravel with Laravel Reverb

A sleek and responsive real-time live chat application built with **Laravel Reverb**, **Tailwind CSS**, and **Vanilla JavaScript**. This project showcases how to implement WebSocket-powered instant messaging without relying on external JS frameworks like Vue or React.



## 📸 Preview
[Desktop-Screenshot-2025-05-06-19-15-18-36.png](https://postimg.cc/z3StyXzK)
![Chat Demo image](https://github.com/monir0153/live-chat/blob/main/public/ss.png)

---

## 🚀 Features

- ⚡ **Real-time messaging** via **Laravel Reverb** and **WebSockets**
- 🎨 **Clean, responsive UI** with **Tailwind CSS**
- ✨ **Dynamic front-end interactions** using **Vanilla JavaScript**
- 📱 Mobile-friendly and desktop-ready layout
- 📥 Message input with instant broadcast to all connected clients
- 🔒 Secure broadcasting through Laravel Reverb channels

---

## 🛠️ Tech Stack

- **Backend:** Laravel 11, Laravel Reverb (WebSockets)
- **Frontend:** Tailwind CSS, Vanilla JavaScript
- **Broadcast Driver:** Laravel Reverb (WebSockets)

---

## 📦 Installation & Setup

```bash
# 1️⃣ Clone the repository
git clone https://github.com/monir0153/live-chat
cd live-chat

# 2️⃣ Install dependencies
composer install or composer update
npm install && npm run build

# 3️⃣ Set up environment variables
cp .env.example .env
php artisan key:generate

# 4️⃣ Configure broadcasting in .env
BROADCAST_DRIVER=reverb
REVERB_APP_KEY=your_app_key_here
REVERB_PORT=6001

# 5️⃣ Run migrations
php artisan migrate

# 6️⃣ Start Laravel server
php artisan serve
npm run dev

# 7️⃣ Start Reverb WebSocket server
php artisan reverb:start
```
