class Blog {
  final String id;
  final String name;

  Blog({
    required this.id,
    required this.name,
  });

  factory Blog.fromJson(Map<String, dynamic> json) {
    return Blog(
      id: json['id'],
      name: json['name'],
    );
  }
}
