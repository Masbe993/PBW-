import 'package:flutter/material.dart';
import 'package:hello_world/repository.dart';
import 'package:hello_world/model.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Hello World App',
      home: BlogListScreen(),
    );
  }
}

class BlogListScreen extends StatefulWidget {
  @override
  _BlogListScreenState createState() => _BlogListScreenState();
}

class _BlogListScreenState extends State<BlogListScreen> {
  List<Blog> listblog = [];
  Repository repository = Repository();

  @override
  void initState() {
    super.initState();
    getData();
  }

  getData() async {
    listblog = await repository.getData();
    setState(() {});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Hello World App'),
      ),
      body: listblog.isEmpty
          ? Center(child: CircularProgressIndicator())
          : ListView.separated(
              itemCount: listblog.length,
              itemBuilder: (context, index) {
                return ListTile(
                  title: Text(listblog[index].name),
                );
              },
              separatorBuilder: (context, index) => Divider(),
            ),
    );
  }
}
