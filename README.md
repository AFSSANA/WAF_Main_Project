<img width="1726" height="920" alt="Screenshot 2026-03-08 161954" src="https://github.com/user-attachments/assets/25f3bc82-70de-45ed-a344-82303d788482" />
<img width="1691" height="846" alt="Screenshot 2026-03-08 161636" src="https://github.com/user-attachments/assets/de8448ad-e661-4662-a43b-dd4c564ac6e8" />
<img width="1919" height="1015" alt="Screenshot 2026-03-08 162419" src="https://github.com/user-attachments/assets/3c2a27fc-50ed-43c0-8d70-f7f87ccace0d" />
<img width="1894" height="1006" alt="Screenshot 2026-03-08 162401" src="https://github.com/user-attachments/assets/ae63a00e-cdfd-4a9d-8877-ad4d75d5174b" />
<img width="1694" height="890" alt="Screenshot 2026-03-08 162256" src="https://github.com/user-attachments/assets/3a88727a-a382-44cb-917c-46d9c5bb5609" />
<img width="1450" height="484" alt="Screenshot 2026-03-08 162133" src="https://github.com/user-attachments/assets/9e7a404b-2041-4783-a3bc-cf60c0b73771" />
<img width="1904" height="1006" alt="Screenshot 2026-03-08 162125" src="https://github.com/user-attachments/assets/3abb69bc-3350-4c6d-8c4e-962ed8093b3a" />
# Web Application Firewall with Adaptive Policies

A cloud-based Web Application Firewall (WAF) that detects, blocks, and logs common web attacks in real time — with an interactive admin dashboard for monitoring and visualization.

## Overview

Modern web applications face growing threats from SQL Injection, Cross-Site Scripting (XSS), and Brute Force attacks. Traditional rule-based firewalls often fail to handle dynamic, behavior-driven attack patterns. This project implements a cloud-deployed WAF that goes beyond static rules — offering real-time detection, centralized attack logging, and a visual admin dashboard.

> **Developed by:** Afsana A  
> **Supervised by:** Prof. Gopika Gopan  
> **Institution:** TKM College of Engineering, Kollam

---

## Features

- 🛡️ **Attack Detection** — Detects and blocks SQL Injection, XSS, and Brute Force attacks using behavior-based pattern matching
- 📋 **Attack Logging** — Logs each detected attack with IP address, attack type, input value, page name, timestamp, and status
- 📊 **Admin Dashboard** — Interactive cloud-based dashboard with real-time charts, attack counts, and traffic metrics
- ☁️ **Cloud-Based Architecture** — Scalable and accessible monitoring environment
- 🔍 **Real-Time Monitoring** — Continuous surveillance of all incoming web traffic and user inputs

---

## How It Works

1. **User Interaction Layer** — Users interact with the web application via login and search forms, which serve as potential attack entry points.
2. **WAF Detection Layer** — All inputs are scanned for malicious patterns. Threats are blocked immediately and logged to the database.
3. **Monitoring Dashboard** — Logged attack data is visualized on the admin dashboard with graphical statistics and summaries.

---

## Attack Types Covered

| Attack | Description |
|--------|-------------|
| SQL Injection | Malicious SQL queries injected through input fields |
| Cross-Site Scripting (XSS) | Script injection targeting browsers via user inputs |
| Brute Force | Repeated login attempts to gain unauthorized access |

---

## Tech Stack

- **Frontend / Dashboard:** *( HTML/CSS/JS/PHP)*
- **Deployment:** *( AWS)*

---
---

## Results

The WAF successfully detected and blocked all three attack categories during testing. Attack logs were accurately recorded and visualized on the admin dashboard with correct IP, type, and timestamp data.

---

## Conclusion

This project demonstrates a functional, cloud-ready WAF solution with real-time threat detection and monitoring. It addresses key gaps in existing systems — particularly the lack of behavior-based detection and centralized visualization — providing a scalable foundation for securing web applications.

