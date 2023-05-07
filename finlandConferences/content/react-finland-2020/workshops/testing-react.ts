import { Session, SessionType } from "../../../server/schema/Session";
import { internet } from "../../locations";
import { kentCDodds } from "../../people";

const workshop: Session = {
  type: SessionType.WORKSHOP,
  people: [kentCDodds],
  title: "Test React Applications",
  description: `> Use jest, jest-dom, and React Testing Library to write unit and integration tests for React Components

Writing React applications is pretty easy, but shipping those applications with confidence is an entirely different story. How do you know that your changes work? How do you know those changes aren’t going to break other parts of your application? Do you have to manually walk through your whole application to make certain everything’s still working? No thank you! The more your tests resemble the way your software is used, the more confidence they can give you. Let’s learn how to write tests that make us confident.

In this hands-on workshop we’ll work on adding tests to existing components as well as use our tests to speed up our workflow building new components. We’ll work with everything from simple components and JavaScript functions to complex components with asynchronous logic.

**Topics:**

* Install jest-dom and React Testing Library and configure them to work well with Jest
* Test a simple component
* Test function logic with jest-in-case
* Test components that make HTTP requests
* Test a form
* Test driven development
* Write a custom render function for testing components that rely on context providers (like @reach/router and redux)

> Note that in order to participate the workshop and get most out of it, you should already have basic concepts of React and testing in mind.`,
  keywords: [],
  location: internet,
};

export default workshop;
