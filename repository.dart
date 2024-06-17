import 'dart:convert';
import 'package:hello_world/model.dart';
import 'package:http/http.dart' as http;

class Repository {
  final _baseUrl = 'https://667062050900b5f8724a725d.mockapi.io/kategori';

  Future<List<Blog>> getData() async {
    try {
      final response = await http.get(Uri.parse(_baseUrl));

      if (response.statusCode == 200) {
        Iterable it = jsonDecode(response.body);
        List<Blog> blogs = it.map((e) => Blog.fromJson(e)).toList();
        return blogs;
      } else {
        throw Exception('Failed to load data');
      }
    } catch (e) {
      print(e.toString());
      return [];
    }
  }
}
