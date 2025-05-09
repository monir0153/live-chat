# 📡 Real-Time Live Chat Application with Laravel Reverb


A sleek and responsive real-time live chat application built with **Laravel Reverb**, **Tailwind CSS**, and **Vanilla JavaScript**. This project showcases how to implement WebSocket-powered instant messaging without relying on external JS frameworks like Vue or React.



## 📸 Preview

![Chat Demo image](https://github.com/monir0153/live-chat/blob/main/public/ss.png)
![Chat Demo gif](https://github.com/monir0153/live-chat/blob/main/public/video.gif)

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


### 1️⃣ Clone the repository
```bash
git clone https://github.com/monir0153/live-chat
cd live-chat
```

### 2️⃣ Install dependencies
```bash
composer install or composer update
```
```bash
npm install && npm run build
```

### 3️⃣ Set up environment variables
```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Configure broadcasting in .env
```bash
BROADCAST_DRIVER=reverb
REVERB_APP_KEY=your_app_key_here
REVERB_PORT=6001
```

### 5️⃣ Run migrations
```bash
php artisan migrate
```
### 6️⃣ Start Laravel server
```bash
php artisan serve
npm run dev
```

### 7️⃣ Start Reverb WebSocket server
```bash
php artisan reverb:start
```
