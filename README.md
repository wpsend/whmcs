# WPSEND WHMCS Module Documentation

A beautifully formatted and complete README for GitHub and Docs.

---

## 📦 Installation Guide

### **1. Upload Module to WHMCS**

* Login to your hosting File Manager or use FTP.
* Navigate to: `modules/addons/`
* Upload the module ZIP file.
* Extract (unzip) it inside the **addons** folder.

### **2. Activate the Module**

* Login to your WHMCS Admin Panel.
* Go to: **System Settings → Addon Modules**
* Find **WPSEND** and click **Activate**.

---

## 🔐 Control Panel Login

### **WPSEND Control Panel**

* URL: **[https://cp.wpsend.org](https://cp.wpsend.org)**
* Fast Login: **cp.wpsend.org**

### **Client Area Credentials**

* Available at: **[https://my.wpsend.org](https://my.wpsend.org)**
* Use the credentials shown in the client area.

---

## 📲 Connect WhatsApp Account

### **Steps:**

1. Login to Control Panel: **cp.wpsend.org**
2. Go to **Menu → Hosts → WhatsApp**
3. Click **Connect WhatsApp**
4. A QR Code will appear

   * Scan it quickly using **Linked Devices** in WhatsApp app
   * ⏱️ You have only **15 seconds** to scan

### After Successful Connection

* Copy your **WhatsApp Account Unique ID**
* Now go to WHMCS:

  * **Addon Modules → WPSEND**
  * Paste the ID into **WhatsApp Account ID** field

---

## 🔑 Creating API Keys (Required)

### **1. Generate API Key**

* Login to Control Panel: **cp.wpsend.org**
* Menu → **Tools → API Keys**
* Or directly open:

  * [https://cp.wpsend.org/dashboard/tools/keys](https://cp.wpsend.org/dashboard/tools/keys)
* Click **Add Key**

### **2. API Details**

* **Name:** For My Server (or any name)
* **Permissions:** Select **ALL**
* Click **Generate**

### **3. Copy Keys**

* Copy your **API Key** and **API Secret**
* Go to WHMCS → Addon → **WPSEND**

  * Paste API Key
  * Paste API Secret

---

## ⚙️ Important Compatibility Notice

### ✔️ Our WPSEND Module Works Best On **WHMCS v8.7**

For WHMCS v8.8 or any higher version:

* We use **SMSMANAGER** module
* In v8.8+ its new name becomes: **HostPinnacle SMS Manager**

### To Configure:

* Go to **Configurations → Primary SMS Gateway**
* Select the correct gateway for integration

---

## 🎉 Setup Complete!

Your WPSEND WhatsApp notification system should now work perfectly with WHMCS.

If you need more documentation, custom design, or automation setup — feel free to ask!
