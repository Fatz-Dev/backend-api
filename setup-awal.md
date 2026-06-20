
# 1. Setup dari awal awal

```bash
flutter create fe_digital_library
```

lalu

```bash
cd fe_digital_library
```
untuk buka vscode 

```bash
code .
```

---
# 2. Buat folder dan file seperti pada gambar ( _pada folder lib/_ )
![alt text](image/tugas/1781927882077.png)

# Copy semua code pada file nya masing masing ( `ctrl + A`(blok semua code ini) -> `ctrl + c` -> `ctrl + v` )

## 1. pada folder Models Buat file `anggota_model.dart` dan `buku_model.dart`

## 2. pada folder screens buat file

- file `anggota_screen.dart` pada tugas.md
```dart
kosongkan dulu / no code
```
- file `buku_screen.dart` -> pada tugas.md
```dart
kosongkan dulu / no code
```
- file `dashboard_screen.dart`
```dart
import 'package:flutter/material.dart';
import 'anggota_screen.dart';

class DashboardScreen extends StatelessWidget {
  const DashboardScreen({super.key});
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text("Perpustakaan Digital")),
      body: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          children: [
            ElevatedButton(
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => const AnggotaScreen(),
                  ),
                );
              },
              child: const Text("Kelola Anggota"),
            ),

            SizedBox(height: 10),

            ElevatedButton(onPressed: () {}, child: const Text("Kelola Buku")),

            SizedBox(height: 10),

            ElevatedButton(onPressed: () {}, child: const Text("Peminjaman")),
          ],
        ),
      ),
    );
  }
}

```

- file `login_screen.dart`
```dart
kosong kan dulu / no code
```

- file `navigation_screen.dart`
```dart
import 'package:convex_bottom_bar/convex_bottom_bar.dart';
import 'package:flutter/material.dart';
import 'anggota_screen.dart';
import 'buku_screen.dart';
import 'dashboard_screen.dart';
import 'profile_screen.dart';

class NavigationScreen extends StatefulWidget {
  const NavigationScreen({super.key});

  @override
  State<NavigationScreen> createState() => _NavigationScreenState();
}

class _NavigationScreenState extends State<NavigationScreen> {
  int _selectedIndex = 0;

  static const List<Widget> _pages = [
    DashboardScreen(),
    AnggotaScreen(),
    BukuScreen(),
    ProfileScreen(),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: IndexedStack(index: _selectedIndex, children: _pages),
      bottomNavigationBar: ConvexAppBar(
        items: const [
          TabItem(icon: Icons.home, title: 'Dashboard'),
          TabItem(icon: Icons.group, title: 'Anggota'),
          TabItem(icon: Icons.book, title: 'Buku'),
          TabItem(icon: Icons.person, title: 'Profil'),
        ],
        initialActiveIndex: _selectedIndex,
        onTap: (int index) => setState(() {
          _selectedIndex = index;
        }),
      ),
    );
  }
}

```

- file `profile_screen.dart`
```dart
import 'package:flutter/material.dart';

class ProfileScreen extends StatelessWidget {
  const ProfileScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Profil')),
      body: const Center(
        child: Text('Halaman Profil', style: TextStyle(fontSize: 18)),
      ),
    );
  }
}

```

## 4. pada folder service buat file

- file `api_service.dart`
```dart
kosongkan dulu / no code
```

## 5. pada folder widgets tidak ada file dulu untuk sekarang

## 6. pada file `main.dart`
```dart
import 'package:flutter/material.dart';
import 'screens/navigation_screen.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: const NavigationScreen(),
    );
  }
}

```
## 7. tambahkan 2 dependencies (`cupertino_icons: ^1.0.8` dan `convex_bottom_bar: ^3.2.0`) ini contoh pada code dan cek jika sudah ada **SKIP**
```yaml
dependencies:
  flutter:
    sdk: flutter

  # The following adds the Cupertino Icons font to your application.
  # Use with the CupertinoIcons class for iOS style icons.
  cupertino_icons: ^1.0.8
  convex_bottom_bar: ^3.2.0
  http: ^1.6.0
```

## 8. jalankan project
### buka terminal pada project ini di vscode lalul jalankan
```bash
flutter run
```
lalu ketik
```bash
2
```
### atau langsung (pilihan 2)
```bash
flutter run -d chrome
```

# ** Jika masih ada error, lanjutkan dulu untuk pembuatan tugas (klik tulisan biru) [tugas](tugas.md) 
