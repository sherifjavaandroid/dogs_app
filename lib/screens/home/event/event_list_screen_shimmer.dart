import 'package:flutter/material.dart';
import 'package:pawlly/components/screen_shimmer.dart';
import 'package:pawlly/screens/home/event/event_item_component_shimmer.dart';

class EventListScreenShimmer extends StatelessWidget {
  const EventListScreenShimmer({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return const ScreenShimmer(shimmerComponent: EventItemComponentShimmer());
  }
}
