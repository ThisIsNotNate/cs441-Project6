//
//  ModelController.h
//  cs441-Project6
//
//  Created by Nathaniel Hilscher on 4/15/19.
//  Copyright © 2019 Nathaniel Hilscher. All rights reserved.
//

#import <UIKit/UIKit.h>

@class DataViewController;

@interface ModelController : NSObject <UIPageViewControllerDataSource>

- (DataViewController *)viewControllerAtIndex:(NSUInteger)index storyboard:(UIStoryboard *)storyboard;
- (NSUInteger)indexOfViewController:(DataViewController *)viewController;

@end

