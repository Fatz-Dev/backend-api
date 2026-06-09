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
