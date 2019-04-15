//
//  DataViewController.h
//  cs441-Project6
//
//  Created by Nathaniel Hilscher on 4/15/19.
//  Copyright © 2019 Nathaniel Hilscher. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface DataViewController : UIViewController

@property (strong, nonatomic) IBOutlet UILabel *dataLabel;
@property (strong, nonatomic) id dataObject;

@end

