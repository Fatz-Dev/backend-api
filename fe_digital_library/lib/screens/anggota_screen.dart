import 'package:flutter/material.dart';

class AnggotaScreen extends StatelessWidget {
  const AnggotaScreen({super.key});
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text("Data Anggota")),
      body: const Center(child: Text("Halaman Anggota")),
    );
  }
}
