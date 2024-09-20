import 'package:flutter/material.dart';
import 'package:pawlly/components/screen_shimmer.dart';
import 'package:pawlly/screens/home/blog/blog_item_component_shimmer.dart';

class BlogListScreenShimmer extends StatelessWidget {
  const BlogListScreenShimmer({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return const ScreenShimmer(shimmerComponent: BlogItemComponentShimmer());
  }
}
