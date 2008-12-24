#import "AppController.h"
#import "JRFeedbackController.h"

@implementation AppController

- (IBAction)showFeedback:(id)sender {
	[JRFeedbackController showFeedback];
}

@end
