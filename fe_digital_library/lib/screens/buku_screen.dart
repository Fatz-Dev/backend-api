import 'package:flutter/material.dart';

class BukuScreen extends StatelessWidget {
  const BukuScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Data Buku')),
      body: const Center(child: Text('Halaman Buku')),
    );
  }
}

